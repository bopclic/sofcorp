<x-layout>
    <!-- hero -->
    @include('partials._hero')
    <!-- end hero -->

    <!-- latest listings -->
    <section id="listings" class="p-3">
        @if (session()->has('message'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success" role="alert">
            {{session('message')}}
          </div>
        @endif
        <h3 class="pb-3">Latest Listings</h1>

            <div class="row">
                @foreach ($listings as $listing)
                <div class="col-md-6 col-lg-4">
                    <div class="card m-auto mb-3" style="width: 20rem;">
                        <img 
                        src="{{$listing->logo ? asset('storage/' . $listing->logo) : 'https://images.sampletemplates.com/wp-content/uploads/2019/07/9-Software-Company-Profile-Sample-PDF-Word.png'}}"
                        class="card-img-top" 
                        alt="...">
                        <div class="card-body">
                            {{-- href="{{route('listings.show',['id'=>$listing->id])}}" --}}
                            <h5 class="card-title"><a class="link-dark" href="/listings/show/{{$listing->id}}">{{$listing->company}}</a></h5>
                            <p class="card-text">{{$listing->description}}</p>
                           <x-tags :tagCsv="$listing->tags" />
                            <a target="_blank" href="{{$listing->website}}">{{$listing->website}}</a>
                            <p class="pt-3"><i class="bi bi-geo-alt-fill"></i> {{$listing->location}}</p>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>

            {{$listings->links()}}
    </section>
    <!-- end latest listings -->
</x-layout>
