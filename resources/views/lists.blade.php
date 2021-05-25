<x-header/>
<div style="width:100%; display: inline-flex; flex-direction: row; justify-content: space-between;">
    <h4 class="m-2"> Tasks :</h4>
    <a href="tasks" class="btn btn-sm btn-outline-secondary m-2"> Go back </a>
</div>
<div class="container-fluid" style="width:80%">
<ul style="list-style-type:none;">

<form action='list' method="POST">
@csrf

    @foreach($data as $d)
    <div class="form-control mt-3" style="background-color: rgb(248, 248, 248)">
        <li>
            <div class="input-group mb-1">
                <span class="input-group-text">Task</span>
                <span class="form-control"  style="background-color:white;" >{{ htmlspecialchars_decode($d['task'],ENT_QUOTES) }}</span>
            </div>
            <div class="input-group">
                <span class="input-group-text">Status</span>
                <span class="form-control">{{ ucfirst($d['status']) }}</span>
                @if($d['status']=='pending')<button class="btn btn-outline-success" name="pending" value="{{$d['id']}}">mark as Done</button>
                @elseif($d['status']=='done')<button class="btn btn-outline-warning" name="done" value="{{$d['id']}}">mark as Pending</button>
                @endif
            </div>
        </li>
    </div>
    @endforeach
</form>
</ul>
</div>

<x-footer/>