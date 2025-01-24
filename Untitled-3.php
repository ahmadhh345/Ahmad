<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جمع البيانات المرسلة من النموذج
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // تعيين البريد الإلكتروني الذي سيتم إرسال الرسالة إليه
    $to = "salowmhalaa@gmail.com";  // استبدل هذا بعنوان بريدك الإلكتروني
    $subject = "طلب من العميل";

    // إنشاء محتوى الرسالة
    $body = "الاسم: $name\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";

    // تعيين رأس الرسالة
    $headers = "From: $email";

    // إرسال الرسالة
    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة.";
    }
}
?>
