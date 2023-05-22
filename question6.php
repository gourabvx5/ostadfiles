use Illuminate\Http\Request;

public function someMethod(Request $request)
{
    // Retrieve the value of the 'remember_token' cookie from the request
    $rememberToken = $request->cookie('remember_token', null);

    // You can now use the $rememberToken variable for further processing

    // Example: Displaying the remember_token value
    echo "remember_token: " . $rememberToken;
}
