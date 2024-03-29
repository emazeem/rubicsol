@extends('website.layouts.master')
@section('content')
    <main id="main">
        <section id="team" class="team bg-c-primary ">
            <div class="container-fluid border-bottom" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav custom-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link disabled" href="#Introduction">
                                    <img src="{{url('rubic-lims-logo.png')}}" alt="" style="filter: opacity(0.6) drop-shadow(0 0 0 white);">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{!$section ? 'active':''}}" href="{{url('documentation')}}">1. Introduction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{$section=='quote' ? 'active':''}}" href="{{url('documentation/quote')}}">2. Quotation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{$section=='order' ? 'active':''}}" href="{{url('documentation/order')}}">3. Order Management</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{$section=='calculator' ? 'active':''}}" href="{{url('documentation/calculator')}}">4. Calculator for Calibration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{$section=='reference' ? 'active':''}}" href="{{url('documentation/reference')}}">5. Reference Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link" href="#competence">6. Competence and Environment Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link" href="#qa-qc">7. QA/QC</a>
                            </li>

                        </ul>

                    </div>
                    <div class="col-md-9">
                        <main id="main-doc">
                            @if(!$section)
                                <section class="main-section" id="Introduction">
                                    <header><h2>Introduction</h2></header>
                                    <article>
                                        <p>
                                            Are you tired of manual and time-consuming processes in your laboratory? Do you want to streamline your operations, enhance efficiency, and ensure compliance with industry standards? Look no further! Our state-of-the-art LIMS is here to revolutionize the way you manage your lab.
                                        </p>
                                        <p>
                                            With our powerful LIMS solution, you can say goodbye to cumbersome paperwork, scattered data, and the risk of errors. Our comprehensive system offers a wide range of modules designed to optimize every aspect of your lab workflow.
                                        </p>
                                        <p>
                                            From efficient quotation and order management to precise calibration calculations and seamless report generation, our LIMS simplifies and automates complex processes, saving you time and resources. It enables you to effortlessly track and manage lab inventory, assets, and consumables, ensuring optimal resource allocation and minimizing downtime.
                                        </p>
                                        <p>
                                            But that's not all! Our LIMS is built with a strong focus on quality assurance and compliance. It helps you adhere to ISO:17025 standards, implement robust quality control measures, and conduct internal audits with ease. With our LIMS, you can enhance the overall quality of your operations and instill confidence in your customers.
                                        </p>
                                        <p>
                                            Experience the power of cutting-edge technology, data integrity, and streamlined processes with our innovative LIMS. Our user-friendly interface, powerful calculators, and comprehensive reporting capabilities make it the ultimate tool for scientific excellence.
                                        </p>
                                        <p>
                                            Unlock the full potential of your laboratory with our advanced LIMS solution. Stay ahead of the competition, drive operational efficiency, and provide accurate and reliable results to your customers. Invest in the future of your lab today and witness the transformative impact of our LIMS on your business success.
                                        </p>
                                        <p>
                                            Contact us now to learn more and schedule a personalized demonstration of our LIMS. Take your lab to new heights of productivity, accuracy, and compliance with our game-changing solution. Let us be your partner in achieving excellence in laboratory management.
                                        </p>

                                    </article>
                                </section>
                            @endif
                            @if($section=='quote')
                                <section class="main-section" id="quote">
                                        <header><h2>Quotation Module</h2></header>
                                        <article>
                                            <p>This module allows users to create and manage quotations for services provided by the laboratory. It helps in <code class="highlight-rouge">estimating costs</code>  and providing accurate pricing information to customers.</p>

                                            <ul>
                                                <li>
                                                    <h3>Customers Management</h3>

                                                    RUBIC LIMS provides an easy and eye catching interface to manage your companies profiles.
                                                    By providing Company Name, NTT/FTN, STRN, billing and shipping address with some tax details and chart of account details you can easily create a profile your customer. A company can have multiple contact persons. So, there’s an option to manage company contact person details i.e, name email and phone. These details are very helpful regarding contact with company, getting followups and invoicing, account receivables management activities.
                                                    You can search customer from master list of customers by any details like name, email, phone etc.
                                                    You can edit details of Customer anytime just by clicking on edit icon. And there's a preview of customer profile also where all details
                                                    of customer are mentioned. If you need to delete the customer you can just click delete icon, RUBICLIMS will ask for confirmation and click “Yes”,
                                                    that customer will be deleted from customer list.
                                                    <div class="row">
                                                        <img src="{{url('docs/Customers-list.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Customers-show.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Customers-contact.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>

                                                </li>
                                                <li>
                                                    <h3>RFQ (Request for Quotation)</h3>
                                                    The quotation module starts with the RFQ stage. Here, the user creates a request that includes a list of calibration items and the pricing of capabilities required by the customer. The RFQ serves as the initial document to gather information about the customer's requirements.
                                                    <div class="row">
                                                        <img src="{{url('docs/RFQ.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>

                                                <li>
                                                    <h3>
                                                        Quotation Creation
                                                    </h3>
                                                    Once the RFQ is received, the system converts it into a formal quotation. The user can access the RFQ details and generate a quotation document based on the requested calibration items and pricing information.
                                                    <div class="row">
                                                        <img src="{{url('docs/RFQ-show.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/RFQ-show-1.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>
                                                        Emailing the Quotation
                                                    </h3>
                                                    After the quotation is created, the system provides an option to send the quotation document to the customer via email. In your case, you mentioned using Outlook for this purpose. The system may have integration with Outlook or provide an email composition feature where the user can select the customer's email address and send the quotation as an attachment.

                                                </li>
                                                <li>
                                                    <h3>
                                                        Customer Approval
                                                    </h3>
                                                    Upon receiving the quotation, the customer reviews the document and decides whether to approve it or request modifications. The customer's approval status is recorded in the system, indicating whether the quotation has been accepted or requires further action.
                                                    <div class="row">
                                                        <img src="{{url('docs/Quote-approved.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Awaiting Jobs</h3>
                                                    Once the customer approves the quotation, the system moves the quotation to the "awaiting jobs" stage. This stage signifies that the quotation has been accepted and is ready to be processed further. It serves as a centralized view for pending jobs that need to be scheduled and assigned to technicians.
                                                    <div class="row">
                                                        <img src="{{url('docs/Awaiting-jobs.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Create-Job.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                        </article>
                                    </section>
                            @endif
                                @if($section=='order')
                                    <section class="main-section" id="order">
                                        <header><h2>Order Management</h2></header>
                                        <article>
                                            <p>This module focuses on managing customer orders, tracking their status, and ensuring timely delivery of services. It helps streamline the workflow and ensures efficient coordination between different departments.</p>
                                            <h3 id="lab">Lab Job Workflow</h3>
                                            <ul>
                                                <li>
                                                    <h3>Item Receipt</h3>

                                                    The store in-charge receives the calibration items from the customer and records their arrival in the LIMS. This step ensures proper inventory management and tracking of received items.
                                                    <div class="row">
                                                        <img src="{{url('docs/Recieve-items.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Assignment to Technicians</h3>
                                                    The technical manager assigns the received calibration items to technicians. This assignment is based on factors like technician availability, workload, and expertise required for the specific calibration tasks.
                                                    <div class="row">
                                                        <img src="{{url('docs/Assign-lab-task.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Calibration by Technicians</h3>
                                                    The assigned technicians perform the calibration on the received items. They follow the established procedures and utilize the necessary reference data and tools available in the system.
                                                    <div class="row">
                                                        <img src="{{url('docs/Calibration-1.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Calibration-2.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Calibration-3.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Calibration-4.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Calibration-5.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Calibration-6.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Item Status Update</h3>
                                                    After completing the calibration, the technicians update the status of the calibrated items in the LIMS. The status is changed to "Complete" to indicate that the calibration process has been successfully performed.
                                                </li>
                                                <li>
                                                    <h3>Dispatch to Customer</h3>
                                                    Once the items are calibrated and marked as complete, they are ready for dispatch to the customer. The store in-charge takes responsibility for packaging and preparing the items for shipment.
                                                </li>
                                                <li>
                                                    <h3>Item Delivery</h3>
                                                    The store in-charge updates the status of the calibrated items to "Delivered to Customer" once they are dispatched and successfully reach the customer's location.

                                                </li>
                                            </ul>

                                            <h3 id="site">Site Job Workflow</h3>
                                            <ul>
                                                <li>
                                                    <h3>Assignment of Site Job</h3>
                                                    In the case of a site job, the technical manager assigns a team of technicians to the specific job. This assignment is based on factors like skill set, availability, and expertise required for the site calibration task.
                                                    <div class="row">
                                                        <img src="{{url('docs/Recieve-items.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>

                                                </li>
                                                <li>
                                                    <h3>Gate Pass Management</h3>
                                                    Before technicians embark on a site calibration job, a gate pass is issued to document and track the equipment being carried from the lab to the customer site. The gate pass includes details of the equipment to ensure proper identification and check-in/check-out procedures. Upon returning to the lab after the job, the items are checked again for functionality and condition before being officially checked back into inventory. This process enhances accountability, equipment traceability, and quality control throughout the site calibration workflow.

                                                </li>
                                                <li>
                                                    <h3>On-Site Calibration</h3>
                                                    The assigned team of technicians travels to the customer's location to perform the calibration on-site. They receive the items from the customer, perform the calibration procedures, and ensure accuracy and compliance with standards.
                                                </li>
                                                <li>
                                                    <h3>Handover to Customer</h3>
                                                    Once the calibration is completed on-site, the technicians hand over the calibrated items to the customer, ensuring proper documentation and verification.

                                                </li>
                                            </ul>

                                            The Order Management module you described allows for efficient tracking and management of lab jobs and site jobs. It ensures smooth coordination between various stakeholders, from item receipt and assignment to technicians, to calibration execution, dispatch, and delivery. This streamlined workflow helps maintain customer satisfaction and enhances overall operational efficiency.

                                        </article>
                                    </section>
                                @endif
                                @if($section=='calculator')
                                    <section class="main-section" id="calculator">
                                        <header><h2>Calculator for Calibration</h2></header>
                                        <p>This module provides a tool for performing calibration calculations accurately and efficiently. It may include predefined formulas, conversion factors, and reference data to aid technicians in the calibration process.</p>
                                        <article>
                                            <ul>
                                                <li>
                                                    <h3>Item Assignment</h3>
                                                    The technical manager assigns a specific calibration item to a technician for calibration. The technician receives the item and begins the calibration process.
                                                    <div class="row">
                                                        <img src="{{url('docs/Recieve-items.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Environment Details</h3>
                                                    The technician provides the necessary environment details of the lab where the calibration is taking place. This includes factors like temperature, humidity, pressure, and any other relevant conditions that may affect the calibration process.
                                                    <div class="row">
                                                        <img src="{{url('docs/Calibration-2.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Item Details and Reference Standards</h3>
                                                    The technician enters the details of the item under calibration (UUC) into the system. This includes information such as the item's range, resolution, and accuracy requirements. The system may have a database of reference standards linked to each capability to ensure the appropriate standards are selected for calibration.
                                                    <div class="row">
                                                        <img src="{{url('docs/Calibration-1.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Input Values and Calculation</h3>
                                                    The technician enters input values (x1, x2, x3, etc.) for the calibration process. These values may be collected through measurements using reference standards or other suitable methods. The technician selects the appropriate reference standard and unit for each input value.
                                                    <div class="row">
                                                        <img src="{{url('docs/Calibration-4.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Calculator Components</h3>
                                                    The system includes calculators that perform calculations based on the provided input values and the procedure attached to the capability. Each capability's procedure consists of multiple components that need to be calculated. The calculator module facilitates the automated calculation of these components.
                                                    <div class="row">
                                                        <img src="{{url('docs/Calibration-5.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3> Reports Generation</h3>
                                                    Once the calculations are completed, the system generates various reports such as calibration certificates, worksheets, uncertainty budgets, and any other required documentation. These reports provide comprehensive information about the calibration process, results, uncertainties, and compliance with standards.
                                                    <div class="row">
                                                        <img src="{{url('docs/Calibration-6.png')}}" class="col-md-4 img-thumbnail h-100" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                            </ul>
                                            The Calculator for Calibration module you described facilitates efficient and accurate calculation of calibration components based on the inputs provided by technicians. It ensures that the calculations are performed according to the procedure attached to each capability. The module also enables the generation of essential reports for documentation and record-keeping purposes, ensuring compliance with ISO/IEC 17025 requirements.


                                        </article>
                                    </section>
                                @endif
                                @if($section=='reference')
                                    <section class="main-section" id="reference">
                                        <header><h2>Reference Data</h2></header>
                                        <p>This module stores and manages reference materials, standards, and other relevant information required for calibration activities. It ensures easy access to necessary data and helps maintain consistency in calibration procedures.</p>
                                        <article>
                                            <ul>
                                                <li>
                                                    The Reference Data or Master Data module plays a crucial role in the overall management of the laboratory equipment and calibration procedures. Based on the details you provided, here's an overview of the functionalities and information stored in this module.

                                                </li>
                                                <li>
                                                    <h3>Lab Equipment Information</h3>
                                                    The module stores relevant data related to the laboratory equipment, such as make, model, serial number, manufacturer details, and specifications. This information helps in identifying and managing each piece of equipment effectively.
                                                    <div class="row">
                                                        <img src="{{url('docs/Reference-1.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">

                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Parameters and Units</h3>
                                                    It maintains a list of parameters (e.g., mass, force, pressure) and associates them with the equipment or Unit Under Calibration (UUC) that falls under a specific parameter. Additionally, the module contains a comprehensive unit list, including primary units and their conversions to secondary units for each parameter.
                                                    <div class="row">
                                                        <img src="{{url('docs/Reference-3.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Reference-4.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Procedures</h3>
                                                    The module stores a library of procedures associated with calibration capabilities. Each procedure contains the necessary steps, instructions, and formulas required to perform calibration. It ensures consistency and standardized practices throughout the laboratory.
                                                    <div class="row">
                                                        <img src="{{url('docs/Reference-5.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Components and Uncertainties</h3>
                                                    Within each procedure, components and uncertainties are defined. Components represent different factors or variables that contribute to the calibration process. Uncertainties reflect the level of measurement uncertainty associated with each component. These details aid in accurate calculation and assessment of calibration results.
                                                    <div class="row">
                                                        <img src="{{url('docs/Reference-6.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Calculation Framework</h3>
                                                    The module provides a calculation framework to perform calculations based on the defined components and uncertainties in the procedures. It ensures that the calibration process follows the prescribed formulas and guidelines.

                                                </li>
                                                <li>
                                                    <h3>Capability List</h3>
                                                    The module maintains a capability list that represents the laboratory's calibration capabilities. This list is used during the RFQ stage to compare the customer's item requirements with the lab's capabilities. It helps determine whether the lab can meet the customer's calibration needs.
                                                    <div class="row">
                                                        <img src="{{url('docs/Reference-7.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Reference Data for Errors and Uncertainties</h3>
                                                    The module includes reference data for known errors and uncertainties associated with specific equipment, reference standards, or procedures. This data aids in assessing and quantifying the measurement uncertainties and overall quality of the calibration process.
                                                    <div class="row">
                                                        <img src="{{url('docs/Reference-2.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <h3>Intermediate Checks and Preventive Maintenance</h3>
                                                    The module may also include features for recording intermediate checks performed on equipment to ensure their accuracy and reliability. Additionally, it facilitates tracking and scheduling preventive maintenance activities for equipment to ensure their optimal performance.
                                                    <div class="row">
                                                        <img src="{{url('docs/Reference-8.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                        <img src="{{url('docs/Reference-9.png')}}" class="col-md-4 img-thumbnail" style="object-fit:cover; height:300px" alt="">
                                                    </div>
                                                </li>
                                                <li>
                                                    The Reference Data or Master Data module centralizes and organizes critical information related to laboratory equipment, parameters, units, procedures, uncertainties, capabilities, and maintenance. It enables efficient management of calibration processes, ensures consistency, and supports accurate calculations and reporting.

                                                </li>

                                            </ul>
                                        </article>
                                    </section>
                                @endif
                                @if($section=='competence')
                                    <section class="main-section" id="competence">
                                        <header><h2>Competence and Environment Management</h2></header>
                                        <p>
                                            These modules focus on managing the competence of laboratory personnel and maintaining a suitable working environment. They may include training management, skills assessment, and monitoring of environmental factors.
                                        </p>
                                    </section>
                                @endif
                                @if($section=='qa-qc')
                                    <section class="main-section" id="qa-qc">
                                <header><h2>QA/QC</h2></header>
                                <p>
                                    This module focuses on quality control and assurance processes within the laboratory. It may include features like non-conformance management, document control, corrective and preventive actions, and internal audits.The QA/QC module within our LIMS comprises two essential components: Standard Operating Procedures (SOP) and Forms and Formats.
                                </p>
                                <article>
                                    <ul>
                                        <li>
                                            <h3>SOP</h3>
                                            Our LIMS includes a robust SOP management system that maintains a master list of documents required for various lab activities and processes. SOPs provide standardized guidelines and instructions for carrying out specific tasks, ensuring consistency and compliance throughout your laboratory operations. With the SOP module, you can easily access, update, and distribute SOPs, promoting best practices and quality assurance across your organization.
                                        </li>
                                        <li>
                                            <h3>Forms and Formats</h3>
                                            The LIMS also incorporates a comprehensive repository of forms and formats used during day-to-day lab activities. These forms capture critical data and information required for running lab operations smoothly. Each form is assigned a document number, revision number, issue date, and status (active, inactive, or discarded), providing clear visibility into the current status and validity of each form. By centralizing all forms within the LIMS, you can efficiently manage their usage, revisions, and adherence to SOPs.

                                        </li>
                                    </ul>
                                </article>
                                <p>By integrating SOPs and Forms and Formats under the QA/QC module, our LIMS enhances documentation control, ensures adherence to standardized procedures, and supports regulatory compliance. It empowers your lab with efficient access to SOPs, streamlined form management, and improved quality control practices, ultimately leading to enhanced accuracy, traceability, and overall laboratory performance.</p>

                            </section>
                                @endif
                        </main>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
<style>
        #cust-navbar {
            height: 96%;
            top: 10px;
            position: fixed;
            width: 22%;
        }
        .custom-nav header {
            display: block;
            text-align:center;
            border-bottom: 1px solid #233560;
            font-size: 120%;
            font-weight: lighter!important;
            color: #95a5a6;
        }

        .custom-nav-link{
            color: whitesmoke;
        }


        .custom-nav-link.sub{
            color:whitesmoke;
            font-size: 13px;
            margin-left: 20px;
        }

        .custom-nav-link:link {
            color: whitesmoke;
            margin-top: 10px;
            padding-left: 30px;
        }
        .custom-nav-link:hover{
            color: #fff;
            background-color: #192646;
            transition: 0.3s;

        }
        .custom-nav-link.active,.custom-nav-link.active :hover{
            background: #556896;
        }

        .head-box {
            background-color: #233560;
            color: #fff;
            padding: 5px;
            text-align: center;
            margin-top: 10px;
        }



        section article {
            padding-right: 20px;
        }

        article li {
            font-size: 80%;
            margin-left: 20px;
        }

        /*-&#45;&#45;CODE SECTION-&#45;&#45;*/

        pre {
            display: inline-block;
            background-color: #233560;
            color: #fff;
            margin-left: 40px;
            padding: 0 0 20px 30px;
            font-size: 80%;
            width: 90%;
            white-space: pre-line;

        }

        /*-&#45;&#45;&#45;&#45;&#45;&#45;FOOTER&#45;&#45;&#45;&#45;&#45;&#45;*/

        hr {
            border: 0.5px solid;
            color: #34495e;
        }

        a {
            color: #8e44ad;
            font-weight: bold;
        }

        a:hover {
            text-decoration: none;
            color: #e84393;
        }

        .fa {
            font-size: 22x;
        }

        footer {
            text-align: center;
        }

        footer p {
            text-align: center;
            margin-bottom: 10px;
            font-size: 80%;
        }

        /*-&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;RESPONSIVE&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;*/

        @media only screen and (max-width: 768px) {
            #cust-navbar {
                position: relative;
                width: 100%;
                margin-bottom: 20px;
                padding-bottom: 10px;
                text-align: center;
            }
        }

        @media only screen and (max-width: 480px) {
            pre {
                font-size: 60%;
                max-width: 80%;
                margin-left: 30px;
                padding: 0 10px 10px 20px;
            }
        }
        #main-doc{
            background: #FFFFFF;
            color: #000;
            padding-left: 50px;
            height: 90vh;
            overflow: scroll;
        }
    </style>

@endsection
