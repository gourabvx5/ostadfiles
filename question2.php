use Illuminate\Http\Request;

public function someMethod(Request $request)
{
    // Retrieve the 'User-Agent' header value from the request
    $userAgent = $request->header('User-Agent');

    // You can now use the $userAgent variable for further processing or display

    // Example: Displaying the User-Agent value
    echo "User-Agent: " . $userAgent;
}
