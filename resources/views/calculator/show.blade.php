<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculator</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="antialiased">
    <form method="POST" action="/" class="flex justify-center items-center mt-96">
            @csrf

            <div class="lg:py-3 lg:px-20 ">
                <div class="flex items-center justify-center">
                    <div>
                        <input id="first_operator"
                               name="first_operator"
                               type="text" placeholder="First Operator"
                               value="{{ old('first_operator') }}"
                               {{--                           class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">--}}
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        @error('first_operator')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="p-2">
                        <select name="operation" id="operation_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach(['+','-','*','/'] as $operation)
                                <option
                                    value="{{ $operation }}"
                                    {{ old('operation_id') == $operation ? 'selected' : ''}}>{{ $operation}}</option>
                            @endforeach
                        </select>

                        @error('operation')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <input id="second_operator"
                               name="second_operator"
                               type="text" placeholder="Second Operator"
                               value="{{ old('second_operator') }}"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        @error('second_operator')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 m-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                        Calculate
                    </button>
                </div>
            </div>

    </form>


</body>
</html>
