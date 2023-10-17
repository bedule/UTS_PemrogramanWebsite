<?php
include_once("link/koneksi.php");


    function cekId($input) {
        if (ctype_digit($input)) {
            return true;
        }
        else {
            return false;
        }
    }


    //----------------------------------------------------- INI PUNYA ABOUT ---------------------------------------------------------------------------

    function ambil_namaDepan($idnamaDepan) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM home WHERE id='$idnamaDepan'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['namaDepan'];
        return $text;
    }

    function ambil_namaBelakang($idnamaBelakang) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM home WHERE id='$idnamaBelakang'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['namaBelakang'];
        return $text;
    }

    function ambil_bio1($idbio1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM home WHERE id='$idbio1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['bio1'];
        return $text;
    }

    function ambil_email($idemail) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM home WHERE id='$idemail'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['email'];
        return $text;
    }

    function ambil_bio2($idbio2) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM home WHERE id='$idbio2'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['bio2'];
        return $text;
    }
    function ambil_bio3($idbio3) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM home WHERE id='$idbio3'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['bio3'];
        return $text;
    }

    function ambil_icon1($idicon1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM home WHERE id='$idicon1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['icon1'];
        return $text;
    }

    //----------------------------------------------------- INI PUNYA PROJECT ---------------------------------------------------------------------------

    function ambil_namaProjectapk1($idnamaapk1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idnamaapk1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['namaApk1'];
        return $text;
    }

    function ambil_namaProjectapk2($idnamaapk2) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idnamaapk2'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['namaApk2'];
        return $text;
    }

    function ambil_namaProjectapk3($idnamaapk3) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idnamaapk3'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['namaApk3'];
        return $text;
    }


    function ambil_namaProjectapk4($idnamaapk4) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idnamaapk4'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['namaApk4'];
        return $text;
    }

    function ambil_basicProjectapk1($idbasicapk1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idbasicapk1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['basicApk1'];
        return $text;
    }

    function ambil_basicProjectapk2($idbasicapk2) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idbasicapk2'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['basicApk2'];
        return $text;
    }

    function ambil_basicProjectapk3($idbasicapk3) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idbasicapk3'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['basicApk3'];
        return $text;
    }

    function ambil_basicProjectapk4($idbasicapk4) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idbasicapk4'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['basicApk4'];
        return $text;
    }


    function ambil_projectapk1($idapk1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idapk1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['Apk1'];
        return $text;
    }

    function ambil_projectapk2($idapk2) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idapk2'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['Apk2'];
        return $text;
    }

    function ambil_projectapk3($idapk3) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idapk3'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['Apk3'];
        return $text;
    }

    function ambil_projectapk4($idapk4) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idapk4'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['Apk4'];
        return $text;
    }

    function ambil_projectWaktu1($idWaktu1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idWaktu1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['waktu1'];
        return $text;
    }

    function ambil_projectWaktu2($idWaktu2) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idWaktu2'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['waktu2'];
        return $text;
    }

    function ambil_projectWaktu3($idWaktu3) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idWaktu3'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['waktu3'];
        return $text;
    }

    function ambil_projectWaktu4($idWaktu4) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM project WHERE id='$idWaktu4'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['waktu4'];
        return $text;
    }



    //----------------------------------------------------- INI PUNYA EDUCATION ---------------------------------------------------------------------------


    function ambil_education($idEducation) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducation'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['edu'];
        return $text;
    }

    function ambil_education1($idEducation1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducation1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['sekolah'];
        return $text;
    }

    function ambil_education2($idEducation2) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducation2'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['kampus'];
        return $text;
    }

    function ambil_educationProdi($idEducationProdi) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducationProdi'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['prodi'];
        return $text;
    }

    
    function ambil_educationJurusan($idEducationJurusan) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducationJurusan'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['jurusan'];
        return $text;
    }

    function ambil_educationINF($idEducationINF) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducationINF'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['inf'];
        return $text;
    }

    
    function ambil_educationIPK($idEducationIPK) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducationIPK'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['ipk'];
        return $text;
    }

    function ambil_educationTahun($idEducationTahun) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idEducationTahun'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['tahun'];
        return $text;
    }

    //----------------------------------------------------- INI PUNYA SKILLS ---------------------------------------------------------------------------

    function ambil_skills($idskills) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idskills'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['skills'];
        return $text;
    }

    function ambil_bioSkills($idbioSkills) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM education WHERE id='$idbioSkills'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['bioskill'];
        return $text;
    }


    //----------------------------------------------------- INI PUNYA CONTACT ---------------------------------------------------------------------------

    function ambil_contact1($idContact1) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM contact WHERE id='$idContact1'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['number'];
        return $text;
    }

    function ambil_contact2($idContact2) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM contact WHERE id='$idContact2'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['email'];
        return $text;
    }

    function ambil_contact3($idContact3) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM contact WHERE id='$idContact3'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['facebook'];
        return $text;
    }

    function ambil_contact4($idContact4) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM contact WHERE id='$idContact4'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['instagram'];
        return $text;
    }
    

?>