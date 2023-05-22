use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    // You can now perform further operations with the $email variable

    // Example: Displaying the $email value
    echo "Email: " . $email;

    // Return a JSON response
    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});
