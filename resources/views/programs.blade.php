@extends('Layout.app')
@section('content')
<main>
    <section id="dates-list">
        <div class="row mb-5">
            <div class="col-12" id="line-title">
                <h3>Programs</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table id="program-table-id" class="table table-bordered program-table-new">
                        <tbody>
                            <tr>
                                <td class="cell-grey-color" colspan="3"><b>Tuesday May 16</b></td>
                            </tr>
                            <tr>
                                <td style="width: 10%;" class="cell-light-grey-color">8.30-9.00</td>
                                <td class="cell-red-color" colspan="2">
                                    <div>Registration</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">9.00-10.30</td>
                                <td style="width: 40%;" class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 1. Google Earth Engine (Seminar Room A) - Noel Gorelick
                                        (Google)</a></td>
                                <td style="width: 40%;" class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 2. EnMAP-Box (Seminar Room B) - Andreas Janz (Humboldt
                                        University of Berlin)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">10.30-11.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">11.00-12.30</td>
                                <td class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 1. Google Earth Engine (Seminar Room A) - Noel Gorelick
                                        (Google)</a></td>
                                <td class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 2. EnMAP-Box (Seminar Room B) - Andreas Janz (Humboldt
                                        University of Berlin)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">12.30-14.00</td>
                                <td colspan="2">Lunch</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">14.00-15.30</td>
                                <td class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 3. DART model (Seminar Room A) - Jean-Philippe
                                        Gastellu-Etchegorry (CESBIO)</a></td>
                                <td class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 4. Geohazards Exploitation Platform (Seminar Room B) -
                                        Michael Foumelis (Aristotle University of Thessaloniki)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">15.30-16.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">16.00-17.30</td>
                                <td class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 3. DART model (Seminar Room A) - Jean-Philippe
                                        Gastellu-Etchegorry (CESBIO)</a></td>
                                <td class="cell-purple-color"><a href="technical-tutorials.html"
                                        target="_blank">Tutorial 4. Geohazards Exploitation Platform (Seminar Room B) -
                                        Michael Foumelis (Aristotle University of Thessaloniki)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">17.30-19.00</td>
                                <td class="cell-orange-color"><a href="social-events.html" target="_blank">Ice
                                        Breaker</a></td>
                                <td class="cell-red-color">
                                    <div>Registration</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell-grey-color" colspan="3"><b>Wednesday May 17</b></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">8.30-9.00</td>
                                <td class="cell-red-color" colspan="2">
                                    <div>Registration</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">9.00-9.30</td>
                                <td class="cell-light-blue-color" colspan="2">
                                    <div>Opening and Welcome Session (Concert Hall)</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">9.30-10.30</td>
                                <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                        target="_blank">Advancing AI for Urban Sustainability (Concert Hall) - Gustau
                                        Camps-Valls (Universitat de València)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">10.30-11.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">11.00-12.30</td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 1. Deep learning approaches for
                                        multi-temporal and multi-modal data processing and analysis for urban areas
                                        (Concert Hall)</a></td>
                                <td class="cell-green-color"><a href="#session-information" onclick="closeAll()">Session
                                        1. Urban planning and socioeconomics (Experimental Stage)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">12.30-14.00</td>
                                <td colspan="2">Lunch</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">14.00-15.30</td>
                                <td class="cell-cyan-color" colspan="2"><a href="#session-information"
                                        onclick="closeAll()">Poster Session 1</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">15.30-16.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">16.00-17.15</td>
                                <td class="cell-green-color"><a href="#session-information" onclick="closeAll()">Session
                                        2. Urban form characterization and dynamics (Concert Hall)</a></td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 2. GeoAI for Monitoring Rapid Urbanization
                                        Processes (Experimental Stage)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">17.15-19.30</td>
                                <td class="cell-orange-color" colspan="2"><a href="social-events.html"
                                        target="_blank">Cultural Tour</a></td>
                            </tr>
                            <tr>
                                <td class="cell-grey-color" colspan="3"><b>Thursday May 18</b></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">8.30-9.00</td>
                                <td class="cell-red-color" colspan="2">
                                    <div>Registration</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">9.00-10.00</td>
                                <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                        target="_blank">Municipality of Heraklion towards the challenge of Sustainable
                                        Urban Development on the horizon of 2030 (Concert Hall) - Ioannis Anastasakis
                                        (Heraklion Municipality)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">10.00-10.30</td>
                                <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                        target="_blank">Call to contribute to the IPCC Special Report on Cities and
                                        Climate Change in the 7th Assessment Cycle (Concert Hall) - Karen Seto (Yale
                                        University)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">10.30-11.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">11.00-12.30</td>
                                <td class="cell-cyan-color" colspan="2"><a href="#session-information"
                                        onclick="closeAll()">Poster Session 2</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">12.30-14.00</td>
                                <td colspan="2">Lunch</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">14.00-15.30</td>
                                <td class="cell-blue-color"><a href="#session-information" onclick="closeAll()">Student
                                        Contest Session 1 (Concert Hall)</a></td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 3. Urban Thermal Remote Sensing
                                        (Experimental Stage)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">15.30-16.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">16.00-17.15</td>
                                <td class="cell-blue-color"><a href="#session-information" onclick="closeAll()">Student
                                        Contest Session 2 (Concert Hall)</a></td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 4. Urban Air Quality (Experimental
                                        Stage)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">17.15-18.15</td>
                                <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                        target="_blank">Climate resilient development in the city: Pathways and barriers
                                        identified in the IPCC WGII AR6 report (Concert Hall) - Lisa Schipper
                                        (University of Bonn)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">18.15-19.00</td>
                                <td class="cell-light-blue-color" colspan="2">Visit to <a
                                        class="text-decoration-underline" href="http://rslab.gr/heraklion_eddy.html"
                                        target="_blank">HECMAS</a> Flux Tower</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">19.00-22.00</td>
                                <td class="cell-orange-color" colspan="2"><a href="social-events.html"
                                        target="_blank">Gala Dinner (incl. Student Contest Results Announcement)</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell-grey-color" colspan="3"><b>Friday May 19</b></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">9.00-9.30</td>
                                <td class="cell-red-color" colspan="2">
                                    <div>Registration</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">9.30-10.30</td>
                                <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                        target="_blank">GEO's eye on the cities (Concert Hall) - Evangelos Gerasopoulos
                                        (National Observatory of Athens (NOA))</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">10.30-11.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">11.00-12.30</td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 5. Urban remote sensing for the Global
                                        South (Concert Hall)</a></td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 6. Promoting Urban Resilience through
                                        Methodologies and Tools Deploying Earth Observation Data (Experimental
                                        Stage)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">12.30-14.00</td>
                                <td colspan="2">Lunch</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">14.00-15.30</td>
                                <td class="cell-green-color"><a href="#session-information" onclick="closeAll()">Session
                                        3. New data, algorithms and techniques for urban remote sensing (Concert
                                        Hall)</a></td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 7. EO for integrated risk assessment, urban
                                        adaptation towards Climate Change and Sustainable Urban Development
                                        (Experimental Stage)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">15.30-16.00</td>
                                <td colspan="2">Break</td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">16.00-17.15</td>
                                <td class="cell-green-color"><a href="#session-information" onclick="closeAll()">Session
                                        4. Urban climatology and ecology (Concert Hall)</a></td>
                                <td class="cell-light-green-color"><a href="#session-information"
                                        onclick="closeAll()">Special Session 8. Future settlement growth modelling with
                                        EO products (Experimental Stage)</a></td>
                            </tr>
                            <tr>
                                <td class="cell-light-grey-color">17.15-17.30</td>
                                <td class="cell-light-blue-color" colspan="2">Closing Session (Concert Hall)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection