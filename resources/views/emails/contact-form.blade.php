<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #2d5ba9;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #2d5ba9;
        }
        .value {
            margin-top: 5px;
        }
        .message-box {
            background-color: white;
            padding: 15px;
            border: 1px solid #eee;
            border-radius: 3px;
            margin-top: 5px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 0 0 5px 5px;
        }
        .attachment-note {
            background-color: #e8f0fe;
            padding: 10px;
            border-left: 4px solid #2d5ba9;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Project Inquiry</h1>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="label">Client Name:</div>
            <div class="value">{{ $contactData['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="label">Client Email Address:</div>
            <div class="value">{{ $contactData['email'] }}</div>
        </div>
        
        <div class="field">
            <div class="label">Service Requested:</div>
            <div class="value">{{ $contactData['service_type'] }}</div>
        </div>
        
        <div class="field">
            <div class="label">Client Message:</div>
            <div class="value message-box">{{ $contactData['message'] }}</div>
        </div>
        
        <div class="attachment-note">
            📎 Floor design file is attached to this email for review.
        </div>
    </div>
    
    <div class="footer">
        <strong>Building Estimation & Electrical</strong><br>
        Professional Estimation Services
    </div>
</body>
</html>