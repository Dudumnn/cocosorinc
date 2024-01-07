    <x-messages />
    <!-- Your Livewire component view content -->
    <script>
        // JavaScript to toggle password visibility
        const passwordInput = document.getElementById('password');
        const passwordInput2 = document.getElementById('password_confirmation');
        const showPasswordCheckbox = document.getElementById('show-password');
    
        showPasswordCheckbox.addEventListener('change', () => {
            passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
            passwordInput2.type = showPasswordCheckbox.checked ? 'text' : 'password';
        });
    </script>
    <script>
        // Listen for the $refresh event and reload the page
        Livewire.on('$refresh', function () {
            location.reload();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>

    <script>
        function disableButton() {
            // Toggle the 'pointer-events-none' class
            document.getElementById('myButton').classList.add('pointer-events-none');
        }
        function enableButton() {
            // Enable the button
            document.getElementById('myButton').classList.remove('pointer-events-none');
        }
    </script>
    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');

            const formattedTime = `${hours}:${minutes}:${seconds}`;

            document.getElementById('clock').innerText = formattedTime;
        }

        function updateDate() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('en-US', options);

            document.getElementById('date').innerText = formattedDate;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Update the date every minute
        setInterval(updateDate, 60000);

        // Initial updates
        updateClock();
        updateDate();
    </script>
</body>
</html>