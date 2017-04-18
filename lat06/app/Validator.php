<?php

class Validator
{
    private $errors = array();

    public function validate(array $data, array $rules)
    {
        $valid = true;

        foreach ($rules as $item => $ruleset) {
            $ruleset = explode('|', $ruleset); //Untuk memisahkan apa saja rule nya

            foreach ($ruleset as $rule) {
                $pos = strpos($rule, ':'); // mengambil jumlah karakter sebelum titik dua (:)

                if ($pos != false) {
                    $parameter = substr($rule, $pos + 1); // Mengambil value setelah titik dua
                    $rule = substr($rule, 0, $pos); // Mengambil value sebelum titik dua
                } else {
                    $parameter = '';
                }

                $methodName = 'validate'.ucfirst($rule); // membuat string untuk function dengan camelCase
                // ucfirst() digunakan untuk mengubah karakter pertama menjadi Uppercase

                $value = isset($data[$item]) ? $data[$item] : null; // jika tidak terisi, akan diatur menjadi null

                if (method_exists($this, $methodName)) {
                	// menjalankan function sesuai dengan methodName yang sudah diatur sebelumnya
                    $this->$methodName($item, $value, $parameter) or $valid = false;
                }
            }
        }

        return $valid;
    }

    // digunakan untuk menampilkan data errors
	public function getErrors()
    {
        return $this->errors;
    }

    private function validateRequired($item, $value, $parameter)
    {
        if ($value === '' || $value === null) {
            $this->errors[$item][] = $item.' harus diisi';

            return false;
        }

        return true;
    }

    private function validateNama($item, $value, $parameter)
    {
    	// item = nama
    	// value = ASUS
        if (strlen($value) > 10) {
            $this->errors[$item][] = $item.' harus kurang dari 10 karakter';

            return false;
        }

        return true;

    }

    private function validateMax($item, $value, $parameter)
    {

    	// $item = harga
    	// $value = 2000 -> value
    	// $parameter = 5000 -> syarat
    	if ($value > $parameter) {
    	    $this->errors[$item][] = $item.' harus kurang dari '.$parameter;
    	    return false;
    	}

    	return true;

    }
}
