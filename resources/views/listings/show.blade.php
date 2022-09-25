<x-layout>
     <!-- single listing -->
     <section class="p-3">
        <div class="card m-auto" style="width: 20rem;">
          <img 
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : 'https://images.sampletemplates.com/wp-content/uploads/2019/07/9-Software-Company-Profile-Sample-PDF-Word.png'}}"
          class="card-img-top" 
          alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$listing->company}}</h5>
              <p class="card-text">{{$listing->description}}</p>
              <x-tags :tagCsv="$listing->tags" />
                <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a>
              <p class="pt-3"><i class="bi bi-geo-alt-fill"></i> {{$listing->location}}</p>

              <div class="row text-center">
                <div class="col-lg-6">
                  <a class="btn btn-dark" href="/listings/{{$listing->id}}/edit">Edit</a>
                </div>
                <div class="col-lg-6">
                  <form action="/listings/delete/{{$listing->id}}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </div>
              </div>
              
              
              
            </div>
          </div>
        </section>
    <!-- end single listing -->
</x-layout>