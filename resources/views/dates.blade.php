@extends('Layout.app')
@section('content')
<main>
        <section id="dates-list">
            <div class="row mb-5">
                <div class="col-12" id="line-title">
                    <h3>Dates</h3>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="w-50">Action</th>
                                    <th class="w-50">Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Special Sessions Proposal Deadline</td>
                                    <td>30 June 2022</td>
                                </tr>
                                <tr>
                                    <td>Open submission Website</td>
                                    <td>7 September 2022</td>
                                </tr>
                                <tr>
                                    <td>Papers Submission Deadline</td>
                                    <td>9 December 2022 (updated)</td>
                                </tr>
                                <tr>
                                    <td>Acceptance Notification</td>
                                    <td>31 January 2023</td>
                                </tr>
                                <tr>
                                    <td>Open Registration Website</td>
                                    <td>31 January 2023</td>
                                </tr>
                                <tr>
                                    <td>Early Registration Deadline</td>
                                    <td>31 March 2023</td>
                                </tr>
                                <tr>
                                    <td>Camera-ready Deadline</td>
                                    <td>7 April 2023</td>
                                </tr>
                                <tr>
                                    <td>Satellite Events</td>
                                    <td>16 May 2023</td>
                                </tr>
                                <tr>
                                    <td>Main Conference</td>
                                    <td>17 - 19 May 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    @endsection