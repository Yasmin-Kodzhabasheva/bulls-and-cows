<x-layout>

    <x-navigation></x-navigation>
    <div style="height: 100vh" class="bg-danger d-flex flex-column align-items-center gap-3">


        <h1>Home</h1>

        <div class="d-flex flex-column gap-2">

            <div class="bg-info d-flex justify-content-around">
                <div class="p-3 border border-warning rounded">?</div>
                <div class="p-3 border border-warning rounded">?</div>
                <div class="p-3 border border-warning rounded">?</div>
                <div class="p-3 border border-warning rounded">?</div>
            </div>

            <div class="bg-warning d-flex justify-content-around">
                <div class="w-100 d-flex justify-content-around">
                    <div>
                        <h5>Bulls</h5>
                        <p class="text-center">1</p>
                    </div>
                    <div>
                        <h5>Cows</h5>
                        <p class="text-center">3</p>
                    </div>
                </div>
            </div>

            <div class="bg-info d-flex justify-content-around w-25">
                <input type="number" id="quantity" name="quantity" min="1" max="9">
                <input type="number" id="quantity" name="quantity" min="1" max="9">
                <input type="number" id="quantity" name="quantity" min="1" max="9">
                <input type="number" id="quantity" name="quantity" min="1" max="9">
            </div>



        </div>


</x-layout>