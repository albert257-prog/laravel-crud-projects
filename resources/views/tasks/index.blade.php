<div class="container py-5">
    <div class="d-flex justify-content-between mb-4">
        <h1>My Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
    </div>

    <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
        <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by title...">
    </form>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>
                    <span class="badge {{ $task->status === 'completed' ? 'bg-success' : 'bg-warning' }}">
                        {{ ucfirst($task->status) }}
                    </span>
                </td>
                <td>
                    @can('update', $task)
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    @endcan

                    @can('delete', $task)
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Archive this task?')">Delete</button>
                        </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $tasks->links() }}
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title text-muted">Total Tasks</h5>
                <h2 class="fw-bold">{{ $stats['total'] }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-warning">
            <div class="card-body text-warning">
                <h5 class="card-title">Pending</h5>
                <h2 class="fw-bold">{{ $stats['pending'] }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-success">
            <div class="card-body text-success">
                <h5 class="card-title">Completed</h5>
                <h2 class="fw-bold">{{ $stats['completed'] }}</h2>
            </div>
        </div>
    </div>
</div>