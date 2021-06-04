<div class="card-footer bg-transparent" dir="rtl">
    <div class="d-flex">
        <div class="d-flex align-items-center">
            <img src="/imgs/clock.svg" alt="">
            <div class="mr-2">
                {{ $project->created_at->diffForHumans() }}
            </div>
        </div>
        <div class="d-flex align-items-center mr-4">
            <img src="/imgs/list-check.svg" alt="">
            <div class="mr-1">
                {{ count($project->tasks)}}
            </div>
        </div>
        <div class="d-flex align-items-center mr-auto">
            <form action="/projects/{{$project->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn-delete">
                    <img src="/imgs/trash.svg">
                </button>                
            </form>
        </div>
    </div>
</div>
