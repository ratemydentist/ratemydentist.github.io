<?php
   session_start();

if(isset($_POST["time_plan"]) && !empty($_POST["time_plan"]) &&
isset($_POST["date_plan"]) && !empty($_POST["date_plan"]) &&
isset($_POST["doctor_plan"]) && !empty($_POST["doctor_plan"]) &&
isset($_POST["address_plan"]) && !empty($_POST["address_plan"]) &&
isset($_POST["name_input"]) && !empty($_POST["name_input"]) &&
isset($_POST["idcode_input"]) && !empty($_POST["idcode_input"]) &&
isset($_POST["email_input"]) && !empty($_POST["email_input"]) &&
isset($_POST["phone_input"]) && !empty($_POST["phone_input"])
){
   $time_plan= $_POST["time_plan"];
   $date_plan= $_POST["date_plan"];
   $doctor_plan= $_POST["doctor_plan"];
   $clinic_plan= $_POST["address_plan"];
   $name_input= $_POST["name_input"];
   $idcode_input= $_POST["idcode_input"];
   $email_input= $_POST["email_input"];
   $phone_input= $_POST["phone_input"];
   $reason_input= " ";
   if(isset($_POST["reason_input"]) && !empty($_POST["reason_input"])){
      $reason_input= $_POST["reason_input"];
   }

   $to      = $email_input;
   $subject = 'RateMyDentist dentist visit confirmation';
   $message = 'Dentist visit confirmation!

      You have registered for a dentist visit.
      '.$time_plan.' '.$date_plan.'
      Doctor: Ksenia Ovchinnikova
      '.$clinic_plan.'
      Patient name: '.$name_input.'
      Patient ID code: '.$idcode_input.'
      Patient email: '.$email_input.'
      Patient phone: '.$phone_input.'
      Reason for visit: '.$reason_input;

   $message = wordwrap($message, 200, "\r\n");
   $headers = 'From: info@ratemydentist.com' . "\r\n" .
      'Reply-To: info@ratemydentist.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
   mail($to, $subject, $message, $headers);

   header("Location: https://ratemydentist.000webhostapp.com?register=done");
   die();
}
?>
