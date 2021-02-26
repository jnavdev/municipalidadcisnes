@extends('web.layouts.master')

@section('content')
    <!-- block-wrapper-section
    ================================================== -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- grid box -->
                        <div class="grid-box">
                            <div class="title-section">
                                <h1><span>ESTUDIO PLAN REGULADOR COMUNAL 2017</span></h1>
                            </div>
                            <div class="post-content">
                                <h4>ACTUALIZACIÓN PLAN REGULADOR COMUNAL DE PUERTO VARAS</h4>
                                <h5> Puerto Varas lo planificamos entre todos</h5>

                                <p>



                                    El Municipio de Puerto Varas se encuentra elaborando la Actualización del Plan Regulador Comunal, para lo cual la presencia de la comunidad en su conjunto se hace vital en esta instancia en donde debemos consolidar una imagen y modelo de ciudad que permita un desarrollo sustentable, sin perder de vista todos los elementos que nos caracterizan y que nos hace únicos como ciudad. Debemos ser muy cuidadosos a la hora de crecer: más controlado y concentrado, en armonía con el entorno, protegiendo nuestros mayores activos urbanos y naturales; promoviendo la equidad en la distribución de los servicios, las oportunidades de trabajo, los equipamientos y la infraestructura.</p>


                                <blockquote>
                                    <p>Promover el desarrollo equilibrado sin poner en riesgo nuestra calidad de vida, la de una ciudad pequeña, caminable, inclusiva y que es capaz de avanzar sin destruir los elementos que le dan el carácter y su particularidad. </p>
                                </blockquote>
                            </div>

                            <div class="about-more-autor">
                                <ul class="nav nav-tabs" id="myTab2">
                                    <li class="active">
                                        <a href="#about-autor" data-toggle="tab">Informe Nº1</a>
                                    </li>
                                    <li>
                                        <a href="#more-autor" data-toggle="tab">Informe Nº2</a>
                                    </li>
                                    <li>
                                        <a href="#more-autor1" data-toggle="tab">Informe Nº3</a>
                                    </li>
                                    <li>
                                        <a href="#more-autor2" data-toggle="tab">Anteproyecto</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    {{--Comienzo primero--}}
                                    <div class="tab-pane active" id="about-autor">
                                        <div class="forum-table">
                                            <div class="table-head">
                                                <div class="first-col"><a href="#" target="_blank">Informe Nº1</a></div>

                                                <div class="third-col"><span></span></div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/ESTUDIO-DIAGNOSTICO-subs.pdf')}} "target="_blank">Estudio Diagnóstico Julio 2015</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>

                                                </div>

                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/ESTUDIO-EQUIPAMIENTO-julio-2015.pdf')}} "target="_blank">Estudio Equipamiento Julio 2015</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/ESTUDIO-PATRIMONIO-julio-2015.pdf')}} "target="_blank">Estudio de Patrimonio Julio 2015</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/ESTUDIO-RIESGOS-julio-2015.pdf')}} "target="_blank">Estudio de Riesgos Julio 2015</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/PUERTO-VARAS__PROCESO-PARTICIPATIVO-ABRIL-2015.pdf')}} "target="_blank">Informe del Proceso Participativo</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/Material-de-trabajo-taller-tecnicos.pdf')}} "target="_blank">Material talleres Técnicos</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/PUERTO-VARAS__PROCESO-PARTICIPATIVO-ABRIL-2015.pdf')}} "target="_blank">Proceso Participativo Abril 2015</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe1/PV-lam.pdf')}} "target="_blank">Puerto Varas</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{--Fin primero--}}

                                    {{--Comienzo Segundo--}}
                                    <div class="tab-pane" id="more-autor">

                                        <div class="forum-table">
                                            <div class="table-head">
                                                <div class="first-col"><a href="#" target="_blank">Informe Nº2</a></div>

                                                <div class="third-col"><span></span></div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_DENSIDAD-POBLACION.pdf')}} "target="_blank">Estudio Densidad de Suelo Urbano</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_EVOLUCION-CRECIMIENTO-URB.pdf')}} "target="_blank">Evolución del Crecimiento Urbano</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_EQUIPAMIENTO_OCT15.pdf')}} "target="_blank">Estudio de Equipamiento Comunal</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_INFO_AMB_E2.pdf')}} "target="_blank">Informe Ambiental</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_ECV_OCT15-1.pdf')}} "target="_blank">Estudio de Capacidad Vial</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_ANEXO1_PPC.pdf')}} "target="_blank">Anexo 1 – 2ª Jornada de Participación Ciudadana</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_INFO2_PPC.pdf')}} "target="_blank">Informe 2ª Jornada de Participación Ciudadana</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_LAMINAS_TALLERES_OCT15.pdf')}} "target="_blank">Láminas de Talleres</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_PRES_CAPACITACIαN_OCT15.pdf')}} "target="_blank">Capacitación sobre IPTR</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_PRES_COMUNIDAD_OCT15.pdf')}} "target="_blank">Taller de Participación Ciudadana Etapa 2</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    {{--Fin Segundo--}}
                                    {{--Comienzo Tercero--}}
                                    <div class="tab-pane" id="more-autor1">

                                        <div class="forum-table">
                                            <div class="table-head">
                                                <div class="first-col"><a href="#" target="_blank">Informe Nº3</a></div>

                                                <div class="third-col"><span></span></div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_IMO.pdf')}} "target="_blank">Imagen Objetivo Comuna</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_SISTEMA_COMUNA.pdf')}} "target="_blank">Análisis de Competitividad</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_MEMORIA_CAP1-2-1.pdf')}} "target="_blank">Memoria Explicativa Cap. 1-2</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_MEMORIA_CAP3-4-1.pdf')}} "target="_blank">Memoria Explicativa Cap. 3-4</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_MEMORIA_CAP5-1.pdf')}} "target="_blank">Memoria Explicativa Cap. 5</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_ORDENANZA_ANTEPROY_MAY16-1.pdf')}} "target="_blank">Versión Preliminar de Anteproyecto</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_INFO.AMBIENTAL_MAY16.pdf')}} "target="_blank">Informe Ambiental</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_LOC_ICH_MN_ZCH.pdf')}} "target="_blank">Localización</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_PATRIMONIO_MAY16.pdf')}} "target="_blank">Estudio de Patrimonio</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_EQUIPAMIENTO_MAY16.pdf')}} "target="_blank">Estudio de Equipamiento Comunal</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe2/PV_F.SANITARIA_MAY15.pdf')}} "target="_blank">Estudio Sanitario</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_ECV_OCT15-1.pdf')}} "target="_blank">Estudio Vial</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_PRES_COMUNIDAD_OCT15.pdf')}} "target="_blank">Anteproyecto Ensenada</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/Anteproyecto-Nueva-Braunau.pdf')}} "target="_blank">Anteproyecto Nueva Braunau</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/Anteproyecto-Puerto-Varas.pdf')}} "target="_blank">Anteproyecto Puerto Varas</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_F.RIESGO_MAY16.pdf')}} "target="_blank">Láminas de Riesgo</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ asset('assets/web/pr/Informe3/PV_ORDENANZA_ANTEPROY_MAY16-1.pdf')}} "target="_blank">Ordenanza Propuesta</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="first-col">
                                                    <h2><a href="{{ url('https://www.mercadopublico.cl/Procurement/Modules/RFB/DetailsAcquisition.aspx?qs=/RojfL8qjIkizIDQ0j+GgPIpfKqhKqa3pC/WUbcpmsHrJhectH8Y0P6jGVrOxevB') }}" target="_blank">Licitación ID N° 2852-122-LP14</a></h2>
                                                    <p>Ilustre Municipalidad de Puerto Varas </p>
                                                </div>
                                            </div>
                                         </div>
                                        </div>
                                    {{--Fin Tercero--}}
                                    {{--Comienzo Cuarto--}}
                                        <div class="tab-pane active" id="more-autor2">
                                            <div class="forum-table">
                                                <div class="table-head">
                                                    <div class="first-col"><a href="#" target="_blank">AnteProyecto</a></div>

                                                    <div class="third-col"><span></span></div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/TALLER-ANTEPROYECTO-PLAN-REGULADOR-COMUNAL.pdf')}} "target="_blank">Grupo 1</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>

                                                    </div>

                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Laminas-Grupo1.pdf')}} "target="_blank">Láminas Grupo 1</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Integrantes-Grupo2.pdf')}} "target="_blank">Grupo 2</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Laminas.pdf')}} "target="_blank">Láminas Grupo 2</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Integrantes-Grupo3.pdf')}} "target="_blank">Grupo 3</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Informe1/Laminas-Grupo3.pdf')}} " target="_blank">Láminas Grupo 3</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Laminas-Grupo4.pdf')}} "target="_blank">Grupo 4</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Laminas-Grupo4.pdf')}} " target="_blank">Láminas Grupo 4</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Integrantes_Grupo5-1.pdf')}} "target="_blank">Grupo 5</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>
                                                <div class="table-row">
                                                    <div class="first-col">
                                                        <h2><a href="{{ asset('assets/web/pr/Anteproyecto/Laminas-Grupo5.pdf')}} "target="_blank">Láminas Grupo 5</a></h2>
                                                        <p>Ilustre Municipalidad de Puerto Varas </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    {{--Fin Cuarto--}}
                                    </div>
                                </div>




                    </div>
                    <!-- End grid box -->

                </div>
                <!-- End block content -->

            </div>
            @include('web.partials.socialsidebar')

        </div>

        </div>
    </section>
    <!-- End block-wrapper-section -->
@endsection