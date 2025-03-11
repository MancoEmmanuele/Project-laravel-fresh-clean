<x-layout headerTitle="Register">








    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 border shadow rounded">


                <form class="m-5" method="post" action="{{route("article.store")}}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">

                        <label class="form-label ">Name</label>
                        <input type="text" class="form-control shadow-none" name="name">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <input type="text" class="form-control shadow-none" name="brand">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control shadow-none" name="price">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload image</label>
                        <input type="file" class="form-control shadow-none" name="img" enc>
                    </div>
                    <div class="my-3 text-center ">
                        <button type="submit" class="btn btn-danger shadow">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
















</x-layout>
