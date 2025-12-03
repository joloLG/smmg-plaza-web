@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Manage Users</h3>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#emailModal{{ $user->id }}">
                      Send Email
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="emailModal{{ $user->id }}" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog">
                        <form action="{{ url('/admin/send_email/'.$user->id) }}" method="POST">
                            @csrf
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Email to {{ $user->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-2">
                                    <label>Greeting</label>
                                    <input type="text" name="greeting" class="form-control" required>
                                </div>
                                <div class="mb-2">
                                    <label>Body</label>
                                    <textarea name="body" class="form-control" required></textarea>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Send</button>
                              </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection