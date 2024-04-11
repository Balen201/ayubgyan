
@extends('front.index')
@section('navaka')

<div class="bg-white font-sans leading-normal tracking-normal">
    <div class="container mt-5">
        <form id="myForm" action="{{ route('personal.storeone') }}" method="POST" class="row justify-content-center" novalidate>
            @csrf

            <h2 id="formHeading" class="text-center my-8-8 p-6"> پەراوى بەرزکردنەوەى پلەى زانستى</h2>

            <div class="col-md-6 mb-3 my-4 ">
                <label for="name" class="form-label">ناوی داواکار:</label>
                <input type="text" class="form-control" name="name" required>
                <small class="text-danger error-message" style="display:none;">Name is required</small>
            </div>

            <div class="col-md-6 mb-3 my-4 ">
                <label for="college" class="form-label">کۆلیژ:</label>
                <input type="text" class="form-control" name="college" required>
                <small class="text-danger error-message" style="display:none;">College is required</small>
            </div>

            <div class="col-md-6 mb-3">
                <label for="department" class="form-label">بەش (لق):</label>
                <input type="text" class="form-control" name="department" required>
                <small class="text-danger error-message" style="display:none;">Department is required</small>
            </div>

            <div class="col-md-6 mb-3">
                <label for="number" class="form-label">ژ.مۆبایل:</label>
                <input type="number" class="form-control" name="number" required>
                <small class="text-danger error-message" style="display:none;">Number is required</small>
            </div>








            <div class="col-md-6 mb-3">
                <label for="play_zansti" class="form-label">پلە ی زانستی ئێستای:</label>
                <select class="form-select" name="play_zansti" required>
                    <option value="">Select</option>
                    <option value="Mamostay Yaridadar">Mamostay Yaridadar</option>
                    <option value="Mamosa">Mamosa</option>
                    <option value="Profisor Yaridadar">Profisor Yaridadar</option>
                    <option value="Profisor">Profisor</option>
                </select>
                <small class="text-danger error-message" style="display:none;">Play Zansti is required</small>
            </div>

            <div class="col-md-6 mb-3">
                <label for="play_dawakraw" class="form-label">ئە و پلە زانستیەی داوای دەکا</label>
                <select class="form-select" name="play_dawakraw" required>
                    <option value="">Select</option>
                    <option value="Mamostay Yaridadar">Mamostay Yaridadar</option>
                    <option value="Mamosa">Mamosa</option>
                    <option value="Profisor Yaridadar">Profisor Yaridadar</option>
                    <option value="Profisor">Profisor</option>
                </select>
                <small class="text-danger error-message" style="display:none;">Play Dawakraw is required</small>
            </div>

            <div class="col-md-6 mb-3">
                <label for="address" class="form-label">ناونیشان :</label>
                <input type="text" class="form-control" name="address" required>
                <small class="text-danger error-message" style="display:none;">Address is required</small>
            </div>

            <div class="col-md-6 mb-3">
                <label for="barwar" class="form-label">بە رواری داواکردن (رۆژی تە سلیمکردنی ئە م ده فتە ره بە سە رۆکی بە ش):</label>
                <input type="date" class="form-control" name="barwar" required>
                <small class="text-danger error-message" style="display:none;">Barwar is required</small>
            </div>












 <div class="col-12 m-3 text-center">
                <button type="submit" id="submitButton" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
</div>

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var inputs = this.querySelectorAll('input, select');
        var isValid = true;

        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid');
                input.nextElementSibling.style.display = 'block';
            } else {
                input.classList.remove('is-invalid');
                input.nextElementSibling.style.display = 'none';
            }
        });

        if (!isValid) {
            document.querySelector('#formHeading').style.display = 'block';
            event.preventDefault(); // Prevent form submission if validation fails
        } else {
            document.querySelector('#formHeading').style.display = 'none';
        }
    });
</script>


@endsection
