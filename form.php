<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>from</title>
</head>
<body>
    <?php include 'conn.php'; ?>
<form method="get">
    <h2>ระดับ R สีแดง</h2>
    <p>- ต้องได้รับความช่วยเหลืออย่างทันที</p>
    <input type="checkbox" name="red-CPR" value="CPR" id="red-CPR">
    <label for="red-CPR">CPR</label><br>

    <input type="checkbox" name="red-ET_tube" value="ET_tube" id="red-ET_tube">
    <label for="red-ET_tube">ET tube</label><br>

    <input type="checkbox" name="red-ICD" value="ICD" id="red-ICD">
    <label for="red-ICD">ICD</label><br>

    <input type="checkbox" name="red-GCS_8" value="GCS_8" id="red-GCS_8">
    <label for="red-GCS_8">GCS ≤ 8</label><br>

    <input type="checkbox" name="red-O2SAT_90" value="O2SAT_90" id="red-O2SAT_90">
    <label for="red-O2SAT_90">O2SAT < 90%</label><br>

    <input type="checkbox" name="red-arrhythmia" value="arrhythmia" id="red-arrhythmia">
    <label for="red-arrhythmia">หัวใจเต้นผิดจังหวะ</label><br>

    <input type="checkbox" name="red-shock" value="shock" id="red-shock">
    <label for="red-shock">Shock</label><br>

    <input type="checkbox" name="red-seizure" value="seizure" id="red-seizure">
    <label for="red-seizure">ชัก</label><br>

    <input type="checkbox" name="red-apnea" value="apnea" id="red-apnea">
    <label for="red-apnea">Apnea</label><br>

    <h2>ระดับ E สีส้ม</h2>
    <p>- ต้องได้รับความช่วยเหลืออย่างรวดเร็ว</p>
    <input type="checkbox" name="orange-fast_track" value="fast_track" id="orange-fast_track">
    <label for="orange-fast_track">Fast track</label><br>

    <input type="checkbox" name="orange-VS_dangerous" value="VS_dangerous" id="orange-VS_dangerous">
    <label for="orange-VS_dangerous">V/S dangerous</label><br>

    <input type="checkbox" name="orange-high_risk" value="high_risk" id="orange-high_risk">
    <label for="orange-high_risk">เสี่ยง</label><br>

    <input type="checkbox" name="orange-drowsy" value="drowsy" id="orange-drowsy">
    <label for="orange-drowsy">ซึม</label><br>

    <input type="checkbox" name="orange-confused" value="confused" id="orange-confused">
    <label for="orange-confused">สับสน</label><br>

    <input type="checkbox" name="orange-pain_7" value="pain_7" id="orange-pain_7">
    <label for="orange-pain_7">ปวด pain score ≥ 7</label><br>

    <input type="checkbox" name="orange-GCS_9_12" value="GCS_9_12" id="orange-GCS_9_12">
    <label for="orange-GCS_9_12">GCS 9-12</label><br>

    <input type="checkbox" name="orange-age_3m" value="age_3m_PR_180_RR_50" id="orange-age_3m">
    <label for="orange-age_3m">อายุ < 3 เดือน PR > 180 RR > 50</label><br>

    <input type="checkbox" name="orange-age_3m_3y" value="age_3m_3y_PR_160_RR_40" id="orange-age_3m_3y">
    <label for="orange-age_3m_3y">อายุ 3 เดือน - 3 ปี PR > 160 RR > 40</label><br>

    <input type="checkbox" name="orange-age_3y_8y" value="age_3y_8y_PR_140_RR_30" id="orange-age_3y_8y">
    <label for="orange-age_3y_8y">อายุ 3 ปี - 8 ปี PR > 140 RR > 30</label><br>

    <input type="checkbox" name="orange-age_8y" value="age_8y_PR_100_RR_20" id="orange-age_8y">
    <label for="orange-age_8y">อายุ > 8 ปี PR > 100 RR > 20</label><br>

    <input type="checkbox" name="orange-SpO2_92" value="SpO2_92" id="orange-SpO2_92">
    <label for="orange-SpO2_92">SpO2 < 92%</label><br>

    <input type="checkbox" name="orange-age_1_3m_temp_38" value="age_1_3m_temp_38" id="orange-age_1_3m_temp_38">
    <label for="orange-age_1_3m_temp_38">อายุ 1 - 3 เดือน อุณหภูมิ > 38.0°C</label><br>

    <h2>ต้องการทำกิจกรรม</h2>
    <input type="checkbox" name="activity-Lab" value="Lab" id="activity-Lab">
    <label for="activity-Lab">Lab</label><br>

    <input type="checkbox" name="activity" activity-X="X-ray" id="activity-X-ray">
    <label for="activity-X-ray">X-ray</label><br>

    <input type="checkbox" name="activity-CT_Scan" value="CT_Scan" id="activity-CT_Scan">
    <label for="activity-CT_Scan">CT Scan</label><br>

    <input type="checkbox" name="activity-EKG" value="EKG" id="activity-EKG">
    <label for="activity-EKG">EKG</label><br>

    <input type="checkbox" name="activity-Ultrasound" value="Ultrasound" id="activity-Ultrasound">
    <label for="activity-Ultrasound">Ultrasound</label><br>

    <input type="checkbox" name="activity-Procedure" value="Procedure" id="activity-Procedure">
    <label for="activity-Procedure">หัตถการ</label><br>

    <input type="checkbox" name="activity-Suture" value="Suture" id="activity-Suture">
    <label for="activity-Suture">Suture</label><br>

    <input type="checkbox" name="activity-Consult" value="Consult" id="activity-Consult">
    <label for="activity-Consult">Consult</label><br>

    <input type="checkbox" name="activity-IV_fluid" value="IV_fluid" id="activity-IV_fluid">
    <label for="activity-IV_fluid">IV fluid</label><br>

    <input type="checkbox" name="activity-Injection_Nebulization" value="Injection_Nebulization" id="activity-Injection_Nebulization">
    <label for="activity-Injection">ฉีดยา หรือ พ่นยา</label><br>

    <h2>ระดับ U สีเหลือง</h2>
    <input type="radio" name="urgency-U" value="U" id="urgency-U">
    <label for="urgency-U">มากกว่า 1 อย่าง</label><br>

    <h2>ระดับ SU สีเขียว</h2>
    <input type="radio" name="urgency-SU" value="SU" id="urgency-SU">
    <label for="urgency-SU">1 อย่าง</label><br>

    <h2>ระดับ NU สีขาว</h2>
    <input type="radio" name="urgency-NU" value="NU" id="urgency-NU">
    <label for="urgency-NU">ไม่มี</label><br>

    <input type="submit" name="send">ส่งข้อมูล</input>
</form>
<?php 

    // Function to process checkboxes into the required format
    function processCheckboxes($prefix) {
        $result = [];
        foreach ($_GET as $key => $value) {
            if (strpos($key, $prefix . '-') === 0) {
                $result[] = $value;
            }
        }
        return $result;
    }

    if (isset($_GET['send'])) {
        $data = [
            "red" => processCheckboxes("red"),
            "orgen" => processCheckboxes("orange"),
            "activity" => processCheckboxes("activity"),
            "urgency" => processCheckboxes("urgency")
        ];
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        $jsonData = mysqli_real_escape_string($conn, $jsonData);
        $result_upload = mysqli_query($conn, "INSERT INTO `patient_records`(`patient_data`) VALUES ('$jsonData')");
        $id_upload = mysqli_insert_id($conn);
        if ($result_upload) {
            mysqli_close($conn);
            echo '<meta http-equiv="refresh" content="0;url=result_page.php?ID='.$id_upload.'">';
            exit();
        }
    }
    
?>

</body>
</html>