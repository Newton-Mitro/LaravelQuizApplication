<table id="" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th colspan="7">The Christian Cooperative Credit Union Ltd, Dhaka.</th>
    </tr>
    <tr>
        <th colspan="7">Exam Title : {{\App\Models\Exam::all()->first()->title }}{{ date(" Y") }}</th>
    </tr>
    <tr>
        <th colspan="7">Exam Date : {{\App\Models\Exam::all()->first()->exam_date }}</th>
    </tr>
    <tr>
    </tr>
    <tr>
        <th>SL</th>
        <th>Employee Name</th>
        <th>Employee ID</th>
        <th>Designation</th>
        <th>Department</th>
        <th>Total Question</th>
        <th>Correct Answer</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->employee_name}}</td>
            <td>{{$employee->employee_id_no}}</td>
            <td>{{$employee->designation}}</td>
            <td>{{$employee->department}}</td>
            <td>{{ $correct = $exam_paper->where('employee_id',$employee->id)->count() }}</td>
            <td>{{ $exam_paper->where('employee_id',$employee->id)->where('answer_status',1)->count() }}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>SL</th>
        <th>Employee Name</th>
        <th>Employee ID</th>
        <th>Designation</th>
        <th>Department</th>
        <th>Total Question</th>
        <th>Correct Answer</th>
    </tr>
    </tfoot>
</table>
