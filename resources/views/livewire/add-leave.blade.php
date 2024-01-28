<div
x-data = "{ visibility : false }"
x-show = "visibility"
x-on:open-modal.window = "visibility = true"
x-on:close-modal.window = "visibility = false"
x-on:keydown.escape.window = "visibility = false"

class="fixed inset-0 z-10 w-screen overflow-y-auto">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="flex w-full justify-center pt-16">
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all w-6/12">
            <form action="/addLeave" method="POST" class="w-full h-fit shadow-lg border border-gray-300 rounded-md">
                @csrf
                <h2 class="bg-gray-50 rounded-t-md text-base font-semibold leading-7 text-gray-900 px-6 py-3 border-b">Add Leave</h2>
                <div class="w-full grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-12 px-6 py-4 pb-6">
                    <div class="sm:col-span-12">
                        <div x-data="{ open: false }" class="wrapperr">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Employee</label>
                            <div x-on:click="open = ! open" type="button" class="select-btnn block flex justify-between items-center flex-row w-full border-0 py-2 pl-3 pr-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 active:ring-2 active:ring-inset active:ring-indigo-600 sm:text-sm sm:leading-6">
                                <span>Select Employee</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none" stroke="currentColor" stroke-width="1.5" class="bi bi-chevron-down text-black" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                                </svg>
                            </div>
                            <div :class="open ? '' : 'hidden'" class="absolute right-6.4 z-10 mt-2 w-11/12 max-h-72 border-2 border-gray-300 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="pt-3 px-2">
                                    <input type="text" name="full_name" placeholder="Search Employee" class="block w-full border-2 rounded-md pl-4 py-1.5 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                                </div>
                                <div class="py-1 overflow-auto max-h-40" role="none" id="employeeContainer">
                                </div>
                            </div>
                            <script>
                                const wrapper = document.querySelector(".wrapperr"),
                                selectBtn = wrapper.querySelector(".select-btnn"),
                                searchInput = wrapper.querySelector("input");
                                let employees = @json($emps->pluck('name')->toArray());

                                function addEmployee(dataArray) {
                                    const employeeContainer = document.getElementById("employeeContainer");
                                    
                                    employeeContainer.innerHTML = "";

                                    dataArray.forEach(employee => {
                                        const employeeDiv = document.createElement("div");
                                        employeeDiv.className = "w-full text-left text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900";
                                        employeeDiv.setAttribute("role", "menuitem");
                                        employeeDiv.setAttribute("tabindex", "-1");
                                        employeeDiv.setAttribute("id", "menu-item-" + employees.indexOf(employee));
                                        employeeDiv.innerText = employee;

                                        
                                        employeeDiv.addEventListener("click", function() {
                                            updateName(this);
                                        });

                                        employeeContainer.appendChild(employeeDiv);
                                    });
                                }
                                addEmployee(employees);
                                
                                searchInput.addEventListener("keyup", () => {
                                    console.log(searchInput.value);
                                    let searchVal = searchInput.value.toLowerCase();
                                    let filteredArr = employees.filter(data => {
                                        return data.toLowerCase().includes(searchVal);
                                    });
                                    console.log(filteredArr);
                                    addEmployee(filteredArr);
                                })

                                function updateName(selectedDiv) {
                                    selectBtn.firstElementChild.innerText = selectedDiv.innerText;
                                    searchInput.value = selectedDiv.innerText;
                                }
                            </script>
                        </div>
                        {{--<label class="block text-sm font-medium leading-6 text-gray-900">Employee</label>
                        <div>
                            <select name="emp_id" class="block w-full border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="">Select Employee</option>
                                @foreach ($emps as $emp)
                                    <option value={{ $emp->id }}>{{ $emp->name }}</option>
                                @endforeach
                            </select>
                        </div>--}}
                    </div>
                    <div class="sm:col-span-12">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Leave Date</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input name="leave_date" datepicker datepicker-format="yyyy-mm-dd" datepicker-autohide type="text" class="pl-9 block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Select date">
                        </div>
                    </div>
                    <div class="sm:col-span-12">
                        <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div>
                            <textarea name="description" type="text" class="block w-full border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('address') }}</textarea>
                            @error('address')
                                <p class="text-red-500 text-xs p-1">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-x-6 w-full px-10 pb-6 flex justify-end">
                    <button type="button" @click="visibility = ! visibility"  class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                        <span>Cancel</span>
                    </button>
                    <button name="submit" type="submit" class="w-1/5 rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
        </div>
    </div>
    
</div>