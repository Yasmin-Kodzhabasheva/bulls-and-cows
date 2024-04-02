<x-layout>
  <x-navigation></x-navigation>
  <div class="d-flex flex-column align-items-center gap-3 p-2">
      <h1>Rankings</h1>

      <table class="table w-auto">
          <tr>
              <th>Rank</th>
              <th>Username</th>
              <th>Bulls</th>
              <th>Cows</th>
              <th>Total Points</th>
          </tr>
          @foreach ($rankings as $index => $rank)
              <tr>
                  <td class="text-center">{{ $index + 1 }}</td>
                  <td class="text-center">{{ $rank->username }}</td>
                  <td class="text-center">{{ $rank->bulls }}</td>
                  <td class="text-center">{{ $rank->cows }}</td>
                  <td class="text-center">{{ $rank->total_points }}</td>
              </tr>
          @endforeach
      </table>
  </div>
</x-layout>