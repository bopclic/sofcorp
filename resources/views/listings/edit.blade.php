<x-layout>
    <div class="container row">
    <div class="col"></div>
    <div class="col-lg-8">

        <h1 class="p-2">Edit Company</h1>
        
        <form action="/listings/update/{{$listing->id}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Company</label>
            <input value="{{$listing->company}}" name="company" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Company: name">
            @error('company')
                <p class="text-danger pt-1">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Company Email</label>
            <input value="{{$listing->email}}" name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email: e.g. email@company.com">
            @error('email')
            <p class="text-danger pt-1">{{$message}}</p>
        @enderror
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Website</label>
            <input value="{{$listing->website}}" name="website" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Website: e.g. www.company.com">
            @error('website')
            <p class="text-danger pt-1">{{$message}}</p>
        @enderror
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Location</label>
            <input value="{{$listing->location}}" name="location" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Location: e.g. Entebbe, Kampala, ...">
            @error('location')
            <p class="text-danger pt-1">{{$message}}</p>
        @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tags</label>
            <input value="{{$listing->tags}}" name="tags" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tags: comma seperated e.g. cow, goat, ...">
            @error('tags')
            <p class="text-danger pt-1">{{$message}}</p>
        @enderror
        </div>
        <div class="mb-3">
          <label for="logo" class="form-label">Company Logo</label>
          <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : 'https://images.sampletemplates.com/wp-content/uploads/2019/07/9-Software-Company-Profile-Sample-PDF-Word.png'}}" alt="" class="img-fluid w-25">
          <input type="file" name="logo" class="form-control">
          @error('logo')
          <p class="text-danger pt-1">{{$message}}</p>
      @enderror
        </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Include experience, clients and portfolio">{{$listing->description}}</textarea>
            @error('description')
            <p class="text-danger pt-1">{{$message}}</p>
        @enderror
          </div>
          <button class="btn btn-dark mb-3" type="submit">Update Company</button>
        </form>

    </div>
    <div class="col"></div>
</div>
</x-layout>