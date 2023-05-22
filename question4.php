use Illuminate\Http\Response;

public function someMethod()
{
    $data = [
        'name' => 'John Doe',
        'age' => 25
    ];

    $response = [
        'message' => 'Success',
        'data' => $data
    ];

    return response()->json($response, Response::HTTP_OK);
}
