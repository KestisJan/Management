<x-layout>
    <x-container>
        <form method="POST" action="{{route ('trucker-store')}}">
            @csrf
            <div class="row">
              <div class="col">
                <label for="name">First Name:</label>
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" placeholder="Last name">
              </div>
              <div class="col">
                <label for="phone_number">Phone Number:</label>
                <input type="text" class="form-control" placeholder="Phone number">
              </div>
              <div class="col">
                <label for="truck_number">Truck Number:</label>
                <input type="text" class="form-control" placeholder="Truck number">
              </div>
              <div class="col">
                <label for="trailer_number">Trailer Number:</label>
                <input type="text" class="form-control" placeholder="Trailer number">
              </div>
              <div class="col">
                <label for="comment">Comment</label>
                <textarea class="form-control" name="comment" placeholder="Comment about driver" rows="3"></textarea>
              </div>

              <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
            </div>
          </form>
    </x-container>
</x-layout>