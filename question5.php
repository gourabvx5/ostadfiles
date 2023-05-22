use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

public function uploadAvatar(Request $request)
{
    if ($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename = $avatar->getClientOriginalName();

        $avatar->storeAs('public/uploads', $filename);

        // You can now perform further operations with the stored file, such as storing the filename in a database

        // Example: Storing the filename in the database
        // Assuming you have a 'User' model and a 'avatar' column in the 'users' table
        $user = User::find(1);
        $user->avatar = $filename;
        $user->save();

        // Return a response indicating the success of the upload
        return response()->json(['message' => 'File uploaded successfully']);
    }

    // Return an error response if no file was uploaded
    return response()->json(['message' => 'No file uploaded'], 400);
}
