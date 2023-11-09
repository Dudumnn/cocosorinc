@if(session()->has('message'))
    <div class="z-50 bg-teal-100 fixed bottom-0 right-0 border-l-4 border-teal-500 text-teal-900 m-3 p-4" role="alert">
        <p class="font-bold">{{session('message')}}</p>
    </div>
@endif