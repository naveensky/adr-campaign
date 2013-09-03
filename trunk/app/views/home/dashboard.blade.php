@extends('layouts.common')
@section('content')

<?php $pagingData = array(); if (!empty($name)) {
    $pagingData['name'] = $name;
} if (!empty($registrationNumber))$pagingData['registrationNumber'] = $registrationNumber;?>
<div class="row">
    <div class="col-md-3">
        <form role="searchForm" method="get" action="<% URL::to('/dashboard') %>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<% $name %>"
                       placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="registrationNumber">Registration Number</label>
                <input type="text" name="registrationNumber" class="form-control" id="registrationNumber"
                       value="<% $registrationNumber %>" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        <div>

        </div>


    </div>
    <!-- /.col-lg-6 -->
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>registrationNumber</th>
                    <th>email</th>
                    <th>mobile</th>
                    <th>address</th>
                    <th>state</th>
                    <th>category</th>
                    <th>File 1</th>
                    <th>File 2</th>
                    <th>File 3</th>
                </tr>
                </thead>
                @if($campaigns->getTotal()==0)
                <tbody>
                <tr>
                    <td colspan="11" style="text-align: center">
                        <br/>
                        <strong>
                            No Data Found
                        </strong>
                        <br/>
                        <br/>
                    </td>
                </tr>
                </tbody>
            </table>
            @else
            <tbody>

            <?php $count = 1;?>
                @foreach ($campaigns as $row)
            <?php $fileCount = 3;?>
            <tr>
                <td><%(($campaigns->getCurrentPage() - 1) * Constants::PAGE_COUNT + $count++)%></td>

                <td><%$row->name%></td>
                <td><%$row->registrationNumber%></td>
                <td><%$row->email%></td>
                <td><%$row->mobile%></td>
                <td><%$row->address%></td>
                <td><%$row->state%></td>
                <td><%$row->category%></td>
                @if(isset($row->campaignFiles))
                @foreach($row->campaignFiles as $fileRow)
                <td><a href="<% URL::to($fileRow['path']) %>"
                       target="_blank"><i class="icon-eye-open icon-large"></i></a></td>
                <?php --$fileCount; ?>
                @endforeach
                @for ($i = 0; $i < $fileCount; ++$i)
                <td>-</td>
                @endfor
                @endif

            </tr>
            @endforeach
            </tbody>
            </table>

            <?php echo $campaigns->appends($pagingData)->links(); ?>
            @endif
            </table>
        </div>
    </div>
</div>
@stop