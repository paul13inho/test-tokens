<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="flex-col flex justify-center">

{{--    <div class="w-full bg-green-700 flex justify-center mb-4 pb-4">--}}
{{--        <form class="w-44 text-center space-y-2" action="{{ route('process.form') }}" method="post">--}}
{{--            @csrf--}}

{{--            <label for="nameInput">Replaced Name:</label>--}}
{{--            <input class="text-center" type="text" id="nameInput" name="nameInput" value="{{ $processedCode ?? '' }}" disabled>--}}

{{--            <label for="codeInput">Enter Code:</label>--}}
{{--            <input class="text-center outline-none" type="text" id="codeInput" name="codeInput">--}}

{{--            <input class="bg-green-400 rounded px-6 py-1 mb-2" type="submit" value="Submit">--}}
{{--        </form>--}}
{{--    </div>--}}

{{-- ------------------------------------------------------------------------------------------------------------------ --}}



    <div class="w-full bg-blue-700 flex justify-center mb-4 pb-4">
        <form class="w-44 text-center space-y-2" method="post" action="{{ route('process.token') }}">
            @csrf
            <label for="textInput">Enter Text:</label><br>
            <input class="text-center" type="text" id="textInput" name="textInput" value="{{ $replacedText ?? '' }}">

            <label for="tokenInput">Enter Token:</label><br>
            <input class="text-center" type="text" id="tokenInput" name="tokenInput">

            <label for="replacementInput">Enter Replacement:</label>
            <input class="text-center" type="text" id="replacementInput" name="replacementInput">

            <input class="bg-blue-400 rounded px-6 py-1 mb-2" type="submit" value="Replace Token">
        </form>
    </div>


</body>
</html>
