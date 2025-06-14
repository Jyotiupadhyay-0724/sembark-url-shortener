@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-5">
    <h2 class="mb-5 text-primary fw-bold text-center">Dashboard</h2>

    @if (auth()->user()->hasRole('SuperAdmin'))
        <h3 class="mb-4 text-success text-center fw-semibold">Super Admin Panel</h3>

        <div class="card shadow-sm rounded-4 mb-5 border-0">
            <div class="card-body">
                <h5 class="card-title mb-4 text-success fw-semibold">Invite User</h5>
                <form action="{{ route('invite') }}" method="POST" class="row g-4 align-items-end">
                    @csrf
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-semibold">Invite User Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg rounded-pill" placeholder="user@example.com" required>
                    </div>
                    <div class="col-md-4">
                        <label for="role" class="form-label fw-semibold">Role</label>
                        <select name="role" id="role" class="form-select form-select-lg rounded-pill" required>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-grid">
                        <button type="submit" class="btn btn-success btn-lg rounded-pill shadow-sm fw-semibold">
                            <i class="bi bi-envelope-fill me-2"></i>Send Invitation
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="{{ route('client') }}" class="btn btn-outline-success btn-lg rounded-pill px-4 shadow-sm d-flex align-items-center gap-2">
                <i class="bi bi-people-fill"></i> View All Clients
            </a>
            <a href="{{ route('short-urls.index') }}" class="btn btn-outline-success btn-lg rounded-pill px-4 shadow-sm d-flex align-items-center gap-2">
                <i class="bi bi-link-45deg"></i> View All Short URLs
            </a>
        </div>

    @elseif (auth()->user()->hasRole('Admin'))
        <h3 class="mb-4 text-info text-center fw-semibold">Admin Panel</h3>

        <div class="card shadow-sm rounded-4 mb-5 border-0">
            <div class="card-body">
                <h5 class="card-title mb-4 text-info fw-semibold">Invite User</h5>
                <form action="{{ route('invite') }}" method="POST" class="row g-4 align-items-end">
                    @csrf
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-semibold">Invite User Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg rounded-pill" placeholder="user@example.com" required>
                    </div>
                    <div class="col-md-4">
                        <label for="role" class="form-label fw-semibold">Role</label>
                        <select name="role" id="role" class="form-select form-select-lg rounded-pill" required>
                            <option value="Admin">Admin</option>
                            <option value="Member">Member</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-grid">
                        <button type="submit" class="btn btn-info btn-lg rounded-pill shadow-sm text-white fw-semibold">
                            <i class="bi bi-envelope-fill me-2"></i>Send Invitation
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-sm rounded-4 mb-5 border-0">
            <div class="card-body">
                <h5 class="card-title mb-4 text-info fw-semibold">Generate Short URL</h5>
                <form action="{{ route('short-urls.store') }}" method="POST" class="row g-4 align-items-end">
                    @csrf
                    <div class="col-md-9">
                        <input type="url" name="original_url" id="original_url" class="form-control form-control-lg rounded-pill" placeholder="Enter URL" required>
                    </div>
                    <div class="col-md-3 d-grid">
                        <button type="submit" class="btn btn-info btn-lg rounded-pill shadow-sm text-white fw-semibold">
                            <i class="bi bi-link-45deg me-2"></i>Generate
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex gap-4 justify-content-center flex-wrap">
            <a href="{{ route('client') }}" class="btn btn-outline-info btn-lg rounded-pill px-4 shadow-sm d-flex align-items-center gap-2">
                <i class="bi bi-people-fill"></i> View Company Members
            </a>
            <a href="{{ route('short-urls.index') }}" class="btn btn-outline-info btn-lg rounded-pill px-4 shadow-sm d-flex align-items-center gap-2">
                <i class="bi bi-link-45deg"></i> View Company Short URLs
            </a>
        </div>

    @else
        <h3 class="mb-4 text-info text-center fw-semibold">Member Panel</h3>

        <div class="card shadow-sm rounded-4 mb-5 border-0">
            <div class="card-body">
                <h5 class="card-title mb-4 text-info fw-semibold">Generate Short URL</h5>
                <form action="{{ route('short-urls.store') }}" method="POST" class="row g-4 align-items-end">
                    @csrf
                    <div class="col-md-9">
                        <input type="url" name="original_url" id="original_url" class="form-control form-control-lg rounded-pill" placeholder="Enter URL" required>
                    </div>
                    <div class="col-md-3 d-grid">
                        <button type="submit" class="btn btn-info btn-lg rounded-pill shadow-sm text-white fw-semibold">
                            <i class="bi bi-link-45deg me-2"></i>Generate
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('short-urls.index') }}" class="btn btn-outline-info btn-lg rounded-pill px-5 shadow-sm d-inline-flex align-items-center gap-2">
                <i class="bi bi-link-45deg"></i> View My Short URLs
            </a>
        </div>
    @endif
</div>
@endsection
