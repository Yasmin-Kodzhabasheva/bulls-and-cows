<x-layout>

    <x-navigation></x-navigation>
    <div style="height: 100vh" class="d-flex flex-column align-items-center gap-3">


        <h1 class="mt-5">Try your luck</h1>

        <p class="w-50 border border-warning bg-warning p-2 rounded text-center ">Enter four numbers and see what you
            will score. If you guess the number you get one cow, if you guess the number and position you get one bull.
            The players with high scores can be seen in our <a href="/ranking">rank list.</a></p>

        <div class="d-flex flex-column gap-2">

            <div class="d-flex justify-content-around">
                <div style="background: lightgray" class="p-3 border border-warning rounded generated-number">?</div>
                <div style="background: lightgray" class="p-3 border border-warning rounded generated-number">?</div>
                <div style="background: lightgray" class="p-3 border border-warning rounded generated-number">?</div>
                <div style="background: lightgray" class="p-3 border border-warning rounded generated-number">?</div>
            </div>

            <div class="bg-info d-flex justify-content-around">
                <div class="w-100 d-flex justify-content-around">
                    <div>
                        <h5 class="text-white">Bulls</h5>
                        <p class="text-center text-white" id="bulls-score">0</p>
                    </div>
                    <div>
                        <h5 class="text-white">Cows</h5>
                        <p class="text-center text-white" id="cows-score">0</p>
                    </div>
                </div>
            </div>

            <div class="form-group bg-info d-flex justify-content-around">
                <input type="number" name="first-number" class="input-numbers" min="0" max="9" required>
                <input type="number" name="second-number" class="input-numbers" min="0" max="9" required>
                <input type="number" name="third-number" class=" input-numbers" min="0" max="9" required>
                <input type="number" name="fourth-number" class="input-numbers" min="0" max="9" required>
            </div>

            <p id="warning" style="width: 16em"
                class="border border-danger bg-danger p-2 rounded text-center text-white"></p>

            <button class="btn btn-info text-white" id="start">Start</button>
            <button class="btn btn-info text-white" id="play_again">Play again</button>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.2.min.js"
            integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

        <script src="{{ asset('/js/home.js') }} "></script>

</x-layout>