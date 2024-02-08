<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use App\Models\User;
use App\Http\Controllers\Log;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
        require base_path('vendor/autoload.php'); // Load Composer's autoloader

        // Set your app credentials
        $username = "SafeWithUs";
        $apiKey = "96990e47f6bb30b762dd032880b827baab42198d1916452d1187346e23e86f97";

        // Initialize the SDK
        $AT = new AfricasTalking($username, $apiKey);

        // Get the SMS service
        $sms = $AT->sms();

        try {
            // Retrieve phone numbers from the users table
            $userPhoneNumbers = User::pluck('phonenumber')->toArray();

            // Convert phone numbers to comma-separated string
            $recipients = implode(',', $userPhoneNumbers);

            // Get the custom message from the form data
            $message = $request->input('group_message');

            // Check if a message was provided, use a default if not
            if (empty($message)) {
                $message = "This is a default test message for sending messages";
            }
            // Thats it, hit send and we'll take care of the rest
            $result = $sms->send([
                'to' => $recipients,
                'message' => $message,
            ]);

            // response()->json($result);
            // Log::info('SMS Result:', ['result' => $result]);
            return redirect('/dashboard')->with('success','message sent successfuly');

        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
