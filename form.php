<?php
include 'connect.php';
date_default_timezone_set("Asia/Manila");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['sub'])) {

    mysqli_begin_transaction($con);

    try {
        function generateRandomCode($length)
        {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $randomCode = generateRandomCode(6);

        $today_db = date("Y-m-d");
        $today = date("F j, Y");


        $check = isset($_POST['check']) ? implode(',', $_POST['check']) : '';
        $learn = isset($_POST['learn']) ? implode(',', $_POST['learn']) : '';

        $lrn = $_POST['LRN'];
        $f_Name = $_POST['firstName'];
        $l_Name = $_POST['lastName'];
        $m_Name = $_POST['middleName'];
        $ext_Name = $_POST['extName'];
        $b_Day = $_POST['bday'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $m_Tongue = $_POST['mTongue'];
        $indiP = $_POST['IndigenousP'];
        $specify = $_POST['yesSpecify'];
        $four_Ps = $_POST['4Ps'];
        $specifys = $_POST['yesSpecifys'];
        $disability = $_POST['disability'];

        $house_No = $_POST['houseNo'];
        $street = $_POST['street'];
        $brgy = $_POST['barangay'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $country = $_POST['country'];
        $zip_Code = $_POST['zipcode'];
        $perma_Add = $_POST['permAddress'];
        $permaHouse = $_POST['permhouseNo'];
        $permaStreet = $_POST['permstreet'];
        $permaBrgy = $_POST['permbarangay'];
        $permaCity = $_POST['permcity'];
        $permaPro = $_POST['permprovince'];
        $permaCountry = $_POST['permcountry'];
        $permaZipCode = $_POST['permzipcode'];

        $father_Ln = $_POST['fatherLN'];
        $father_Fn = $_POST['fatherFN'];
        $father_Mn = $_POST['fatherMN'];
        $father_Contact = $_POST['fatherContact'];
        $mother_Ln = $_POST['motherLN'];
        $mother_Fn = $_POST['motherFN'];
        $mother_Mn = $_POST['motherMN'];
        $mother_Contact = $_POST['motherContact'];
        $guardian_Ln = $_POST['gurdianLN'];
        $guardian_Fn = $_POST['gurdianFN'];
        $guardian_Mn = $_POST['gurdianMN'];
        $guardian_Contact = $_POST['gurdianContact'];

        $last_gr_lvl = $_POST['lastGradeLvl'];
        $last_School = $_POST['lastSchool'];
        $last_Sy = $_POST['lastSY'];
        $school_Id = $_POST['schoolID'];

        $track = $_POST['track'];
        $strand = $_POST['strand'];
        $sem = $_POST['Semester'];

        $id = $_POST['id'];


        $sql_applicant_id = "INSERT INTO applicant (applicant_Id, date) 
    VALUES ('$randomCode', '$today_db')";

        if (!mysqli_query($con, $sql_applicant_id)) {
            throw new Exception(mysqli_error($con));
        }

        $sql_learner = "INSERT INTO info_table(applicant_Id,
    lrn_id, f_Name, l_Name, m_Name, ext_Name, b_Day, age, Sex,
    ip_community, specific_com, m_Tongue, `4ps`, `4ps_id`, disability, specific_disability
    ) VALUES (
    '$randomCode', '$lrn', '$f_Name', '$l_Name', '$m_Name', '$ext_Name', '$b_Day', '$age', '$sex',
    '$indiP', '$specify', '$m_Tongue', '$four_Ps', '$specifys', '$disability', '$check'
    )";

        if (!mysqli_query($con, $sql_learner)) {
            throw new Exception(mysqli_error($con));
        }

        $sql_address = "INSERT INTO address_info(applicant_Id, house_no, st_name, brgy, city, province, country, zip_code, perma_add, perm_house_no,
        perm_street, perm_brgy, perm_city, perm_province, perm_country, perm_zipCode)
        VALUES ('$randomCode', '$house_No', '$street', '$brgy', '$city', '$province', '$country', '$zip_Code', '$perma_Add', '$permaHouse',
    '$permaStreet', '$permaBrgy', '$permaCity', '$permaPro', '$permaCountry', '$permaZipCode')";

        if (!mysqli_query($con, $sql_address)) {
            throw new Exception(mysqli_error($con));
        }

        $sql_parent = "INSERT INTO parent_info(applicant_Id, father_Lname, father_Fname, father_Mname, father_contact,
    mother_Lname, mother_Fname, mother_Mname, mother_contact,
    guardian_Lname, guardian_Fname, guardian_Mname, guardian_contact)
    VALUES('$randomCode', '$father_Ln', '$father_Fn', '$father_Mn', $father_Contact, '$mother_Ln', '$mother_Fn', '$mother_Mn', $mother_Contact,
    '$guardian_Ln', '$guardian_Fn', '$guardian_Mn', $guardian_Contact)";

        if (!mysqli_query($con, $sql_parent)) {
            throw new Exception(mysqli_error($con));
        }

        $sql_balik = "INSERT INTO balik_aral_table(applicant_Id, last_gr_complete, last_sch_attend, last_yr_complete, sch_id)
    VALUES('$randomCode', '$last_gr_lvl', '$last_School', '$last_Sy', '$school_Id')";

        if (!mysqli_query($con, $sql_balik)) {
            throw new Exception(mysqli_error($con));
        }

        $sql_shs_learner = "INSERT INTO shs_learner_table(applicant_Id, track, strand, sem, learning_modality)
    VALUES('$randomCode', '$track', '$strand', '$sem', '$learn')";

        if (!mysqli_query($con, $sql_shs_learner)) {
            throw new Exception(mysqli_error($con));
        }

        mysqli_commit($con);

        header("Location: generate.php?applicant_Id=$randomCode&date=$today");
        exit();

    } catch (Exception $e) {
        mysqli_rollback($con);
        echo '<script> alert("LRN already exist"); 
        window.history.back();</script>';
        exit();
    }
}
?>
