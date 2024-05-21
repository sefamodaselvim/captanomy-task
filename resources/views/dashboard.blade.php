<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to the ESMS Self-Assessment and Improvement Guide tool!
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    This tool was developed to assist you assess and score the maturity of your Environmental and Social
                    Management System (ESMS).<br><br>
                    There are nine sections of the Self-Assessment, one for each element of the ESMS as defined in IFC
                    Performance Standard 1 - Assessment and Management of Environmental and Social Risks and
                    Impacts:<br><br>
                    1) Policy<br>
                    2) Identification of Risks and Impacts <br>
                    3) Management Programs<br>
                    4) Organizational Capacity and Competency <br>
                    5) Emergency Preparedness and Response <br>
                    6) Stakeholder Engagement <br>
                    7) External Communications and Grievance Mechanisms <br>
                    8) Ongoing Reporting to Affected Communities <br>
                    9) Monitoring and Review <br><br>
                    There are from 3 to 9 questions in each section. Each question has six response options. Circle the
                    response that most closely describes the situation at your company. Do not worry if there is no
                    exact match – just pick the one that you think is closest. Answer as candidly and objectively as you
                    can based on the current situation in your organization. Gather input from others in your company
                    that might have knowledge about your ESMS. The purpose of this Self-Assessment is to give you an
                    accurate measure, for your company’s own benchmarking and capacity-building purposes.
                    <br><br>
                    Scores are automatically entered into the Results tab where a graphic representation of your
                    aggregate scores for the nine (9) ESMS elements will appear. When an independent assessment is
                    carried out, the organization can compare the two scores.
                    <br><br>
                    After completing the Self-Assessment go to the Maturity Levels tab and read the level that
                    corresponds to the score that you obtained. Also, the Improvement Tips tab suggest ways that you can
                    work to move up one level.
                    <br><br>
                    Let’s get started. Please provide the following information and save the file as an easily
                    recognizable document for your organization and the date of the current revision.
                    <br><br>
                    <div class="text-end">
                        <a class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-6 py-3.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"
                           href="{{ route('survey') }}">Let's Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
