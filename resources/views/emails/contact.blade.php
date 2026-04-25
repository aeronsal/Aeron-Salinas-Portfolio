<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
    <h2 style="color: #FF2D20;">You have a new message from your portfolio!</h2>
    
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    
    <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
    
    <p><strong>Message:</strong></p>
    <p style="background: #f9f9f9; padding: 15px; border-radius: 5px;">
        {{ nl2br(e($data['message'])) }}
    </p>
</body>
</html>