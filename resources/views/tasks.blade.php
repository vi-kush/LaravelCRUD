<x-header/>

<div class="container mt-3" style="width:80%;">

    <form action="tasks" method="post">
    @csrf
    <div class="form-control">
        <label for="Text" class="mx-2"> <h5>Task :</h5> </label>
        <textarea class="form-control mt-1" placeholder=" Describe Task" id="Text" name="task" rows="5" required></textarea>
        <button type="submit" class="btn btn-outline-success mt-3">Submit</button> 
        <button type="reset" class="btn btn-outline-secondary mt-3">Clear</button> 
    </div>
    </form>
</div>
<br>
<div class="container-fluid mt-4">


</div>

<x-footer/>

    


 