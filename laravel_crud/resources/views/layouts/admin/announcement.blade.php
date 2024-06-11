@include('layouts.admin.dashboard')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Duyuru Gönder</h3>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('announcement.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Duyuru Başlığı</label>
                    <input type="text" name="title" class="form-control" id="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Duyuru İçeriği</label>
                    <textarea name="content" class="form-control" id="content" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gönder</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
