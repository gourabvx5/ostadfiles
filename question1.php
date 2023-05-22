// Assuming the route or controller method handling the form submission is called 'submitForm'

use Illuminate\Http\Request;

public function submitForm(Request $request)
{
    // Retrieve the 'name' input field value from the request
    $name = $request->input('name');

    // You can now use the $name variable to perform further operations
    // For example, you can store it in a database or display it in a view

    // Example: Storing the name in the database
    // Assuming you have a 'User' model and a 'name' column in the 'users' table
    User::create(['name' => $name]);

    // Example: Displaying the name in a view
    return view('welcome', ['name' => $name]);
}
