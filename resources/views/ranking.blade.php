<x-layout>
    <x-navigation></x-navigation>
    <div class="d-flex flex-column align-items-center gap-3 p-2">
        <h1>Ranking</h1>
    
        <table class="table w-auto">
            <tr>
              <th>Rank</th>
              <th>Username</th>
              <th>Bulls</th>
              <th>Cows</th>
              <th>Total Points</th>
            </tr>
            @foreach ($ranking as $rank)
            <tr>
                <td class="text-center">1</td>
                <td class="text-center">{{$rank->user_id}}</td>
                <td class="text-center">{{$rank->bulls}}</td>
                <td class="text-center">{{$rank->cows}}</td>
                <td class="text-center">{{$rank->total_points}}</td>
              </tr>
            @endforeach
          </table>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"
    integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script>

</script>
</x-layout>
