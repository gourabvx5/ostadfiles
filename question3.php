use Illuminate\Http\Request;

public function someMethod(Request $request)
{
    // Retrieve the value of the 'page' query parameter from the request
    $page = $request->input('page', null);

    // You can now use the $page variable for further processing

    // Example: Displaying the page value
    echo "Page: " . $page;
}
