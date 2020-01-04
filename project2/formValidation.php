<?php
    if($_SERVER['REQUEST_METHOD']=='POST') {
        $data = [
            'fullname' => trim($_POST['fullname']),
            'fathername' => trim($_POST['fathername']),
            'address' => trim($_POST['address']),
            'zipcode' => trim($_POST['zipcode']),
            'phone' => trim($_POST['phone']),
            'email' => trim($_POST['email']),
        ];

        $field = [
            'website' => trim($_POST['website']),
            'skills' => trim($_POST['skills']),
            'rate' => trim($_POST['rate']),
            'degree' => trim($_POST['degree']),
            'university' => trim($_POST['university']),
            'year_conduct' => trim($_POST['year_conduct']),
            'ed_desc' => trim($_POST['ed_desc']),
            'company_name' => trim($_POST['company_name']),
            'designation' => trim($_POST['designation']),
            'year' => trim($_POST['year']),
            'ex_desc' => trim($_POST['ex_desc']),
            'ex_website' => trim($_POST['website']),
            'whats_on_mind' => trim($_POST['whats_on_mind'])
        ];

        $err = [
            'fullname_err' => '',
            'fathername_err' => '',
            'address_err' =>'',
            'phone_err' => '',
            'zipcode_err' => '',
            'email_err' => ''
        ];

        // Validation for empty  fields
        foreach($data as $field => $value) {
            if(empty($value)) {
                $err[$field.'_err'] = 'This field is required';
            }
        }

        require('form.php');

    } else {
        $data = [
            'fullname' => '',
            'fathername' => '',
            'address' => '',
            'zipcode' => '',
            'phone' => '',
            'email' => '',
        ];

        $field = [
            'website' => '',
            'skills' => '',
            'rate' => '',
            'degree' => '',
            'university' => '',
            'year_conduct' => '',
            'ed_desc' => '',
            'company_name' => '',
            'designation' => '',
            'year' => '',
            'ex_desc' => '',
            'ex_website' => '',
            'whats_on_mind' => ''
        ];

        require('form.php');
    }
?>