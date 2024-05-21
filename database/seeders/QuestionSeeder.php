<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            1 => 'Policy',
            2 => 'Identification of Risks and Impacts',
            3 => 'Management Programs',
            4 => 'Organizational Capacity and Competency',
            5 => 'Emergency Preparedness and Response',
            6 => 'Stakeholder Engagement',
            7 => 'External Communication and  Grievance Mechanisms',
            8 => 'Ongoing Reporting to Affected Communities',
            9 => 'Monitoring and Review',
        ];

        foreach ($categories as $index => $category) {
            Question::query()->create([
                'text' => $category,
                'order' => $index,
            ]);
        }

        $datas = [
            // Policy
            1 => [
                1 => [
                    'parent_id' => 1,
                    'text' => 'The following best describes our policy on environmental objectives and principles:',
                    'type' => 1,
                    'order' => 1,
                    'answers' => [
                        1 => [
                            'text' => 'We do not have any policies regarding our environmental objectives and principles.',
                            'type' => 2,
                            'order' => 1,
                            'score' => 0,
                        ],
                        2 => [
                            'text' => 'We are in the process of developing policies regarding our environmental objectives and principles.',
                            'type' => 2,
                            'order' => 2,
                            'score' => 1,
                        ],
                        3 => [
                            'text' => 'We have policies regarding environmental issues that are most common in our industry and region.',
                            'type' => 2,
                            'order' => 3,
                            'score' => 2,
                        ],
                        4 => [
                            'text' => 'We have policies that align with the environmental code of conduct and standards of our customers or lenders.',
                            'type' => 2,
                            'order' => 4,
                            'score' => 3,
                        ],
                        5 => [
                            'text' => 'We have policies that align with the environmental code of conduct and standards of our customers or lenders, including a management system requirement.',
                            'type' => 2,
                            'order' => 5,
                            'score' => 4,
                        ],
                        6 => [
                            'text' => 'We have policies that align with the environmental code of conduct and standards of our customers or lenders, including a management system requirement. We have a documented process to periodically review and revise our policies.',
                            'type' => 2,
                            'order' => 6,
                            'score' => 5,
                        ],
                    ],
                ],
                2 => [
                    'parent_id' => 1,
                    'text' => 'The following best describes our policy on occupational health and safety:',
                    'type' => 1,
                    'order' => 2,
                    'answers' => [
                        1 => [
                            'text' => 'We do not have any policies regarding our occupational health and safety objectives and principles.',
                            'type' => 2,
                            'order' => 1,
                            'score' => 0,
                        ],
                        2 => [
                            'text' => 'We are in the process of developing policies regarding our occupational health and safety objectives and principles.',
                            'type' => 2,
                            'order' => 2,
                            'score' => 1,
                        ],
                        3 => [
                            'text' => 'We have policies regarding occupational health and safety issues that are most common in our industry and region.',
                            'type' => 2,
                            'order' => 3,
                            'score' => 2,
                        ],
                        4 => [
                            'text' => 'We have policies that align with the occupational health and safety requirements of ILO or OSHA standards.',
                            'type' => 2,
                            'order' => 4,
                            'score' => 3,
                        ],
                        5 => [
                            'text' => 'We have policies that align with the occupational health and safety requirements of  ILO or OSHA standards, including a management system requirement.',
                            'type' => 2,
                            'order' => 5,
                            'score' => 4,
                        ],
                        6 => [
                            'text' => 'We have policies that align with the occupational health and safety requirements of ILO or OSHA standards, including a management system requirement.  We have a documented process to periodically review and revise our policies.',
                            'type' => 2,
                            'order' => 6,
                            'score' => 5,
                        ],
                    ],
                ],
                3 => [
                    'parent_id' => 1,
                    'text' => 'The following best describes our policy on labor and working conditions:',
                    'type' => 1,
                    'order' => 3,
                    'answers' => [
                        1 => [
                            'text' => 'We do not have any policies regarding our labor and working conditions objectives and principles.',
                            'type' => 2,
                            'order' => 1,
                            'score' => 0,
                        ],
                        2 => [
                            'text' => 'We are in the process of developing policies regarding our labor and working conditions objectives and principles.',
                            'type' => 2,
                            'order' => 2,
                            'score' => 1,
                        ],
                        3 => [
                            'text' => 'We have policies regarding labor and working conditions issues that are regulated by national labor law.',
                            'type' => 2,
                            'order' => 3,
                            'score' => 2,
                        ],
                        4 => [
                            'text' => 'We have policies that align with the requirements of the ILO conventions on labor and working conditions.',
                            'type' => 2,
                            'order' => 4,
                            'score' => 3,
                        ],
                        5 => [
                            'text' => 'We have policies that align with the requirements of the ILO conventions on labor and working conditions, including a management system requirement.',
                            'type' => 2,
                            'order' => 5,
                            'score' => 4,
                        ],
                        6 => [
                            'text' => 'We have policies that align with the requirements of the ILO conventions on labor and working conditions, including a management system requirement. We have a documented process to periodically review and revise our policies.',
                            'type' => 2,
                            'order' => 6,
                            'score' => 5,
                        ],
                    ],
                ],
                4 => [
                    'parent_id' => 1,
                    'text' => 'The following best describes our policy on community health, safety, and security:',
                    'type' => 1,
                    'order' => 4,
                    'answers' => [
                        1 => [
                            'text' => 'We do not have any policies regarding community health, safety, and security objectives and principles.',
                            'type' => 2,
                            'order' => 1,
                            'score' => 0,
                        ],
                        2 => [
                            'text' => 'We are in the process of developing policies regarding community health, safety, and security objectives and principles.',
                            'type' => 2,
                            'order' => 2,
                            'score' => 1,
                        ],
                        3 => [
                            'text' => 'We have policies regarding community health, safety, and security issues that are most common in our industry and region.',
                            'type' => 2,
                            'order' => 3,
                            'score' => 2,
                        ],
                        4 => [
                            'text' => 'We have policies that align with the code of conduct and standards of our customers or lenders.',
                            'type' => 2,
                            'order' => 4,
                            'score' => 3,
                        ],
                        5 => [
                            'text' => 'We have policies that align with the code of conduct and standards of our customers or lenders, including a management system requirement.',
                            'type' => 2,
                            'order' => 5,
                            'score' => 4,
                        ],
                        6 => [
                            'text' => 'We have policies that align with the code of conduct and standards of our customers or lenders, including a management system requirement.  We have a documented process to periodically review and revise our policies.',
                            'type' => 2,
                            'order' => 6,
                            'score' => 5,
                        ],
                    ],
                ],
                5 => [
                    'parent_id' => 1,
                    'text' => 'We review and revise our environmental and social policies as follows:',
                    'type' => 1,
                    'order' => 5,
                    'answers' => [
                        1 => [
                            'text' => 'We do not review our policies.',
                            'type' => 2,
                            'order' => 1,
                            'score' => 0,
                        ],
                        2 => [
                            'text' => 'We revise our policies in reaction to external requests.',
                            'type' => 2,
                            'order' => 2,
                            'score' => 1,
                        ],
                        3 => [
                            'text' => 'We revise our policies when we become aware of changes in local regulations.',
                            'type' => 2,
                            'order' => 3,
                            'score' => 2,
                        ],
                        4 => [
                            'text' => 'We have a procedure to review and revise our  policies based on any changes in regulations or customer/lender requirements.',
                            'type' => 2,
                            'order' => 4,
                            'score' => 3,
                        ],
                        5 => [
                            'text' => 'We periodically review and revise our policies based on any changes in regulations or customer/lender requirements, and the results of monitoring and review of our performance.',
                            'type' => 2,
                            'order' => 5,
                            'score' => 4,
                        ],
                        6 => [
                            'text' => 'We periodically review and revise our policies based on any changes in regulations or customer/lender requirements, and the results of monitoring and review of our performance. We involve our workers and external stakeholders in the process.',
                            'type' => 2,
                            'order' => 6,
                            'score' => 5,
                        ],
                    ],
                ],
                6 => [
                    'parent_id' => 1,
                    'text' => 'The following best describes how our environmental and social policies are communicated:',
                    'type' => 1,
                    'order' => 6,
                    'answers' => [
                        1 => [
                            'text' => 'We do not have a way to communicate environmental and social policies.',
                            'type' => 2,
                            'order' => 1,
                            'score' => 0,
                        ],
                        2 => [
                            'text' => 'We verbally communicate environmental and social policies in our workplace.',
                            'type' => 2,
                            'order' => 2,
                            'score' => 1,
                        ],
                        3 => [
                            'text' => 'Our environmental and social policies are prominently posted in our facility and mentioned during the initial orientation for new employees.',
                            'type' => 2,
                            'order' => 3,
                            'score' => 2,
                        ],
                        4 => [
                            'text' => 'Our environmental and social policies are distributed and explained to all employees, including contract and seasonal workers.',
                            'type' => 2,
                            'order' => 4,
                            'score' => 3,
                        ],
                        5 => [
                            'text' => 'We communicate our environmental and social policies in all relevant languages for all employees, including contract and seasonal workers. We check to make sure that everyone understands.',
                            'type' => 2,
                            'order' => 5,
                            'score' => 4,
                        ],
                        6 => [
                            'text' => 'We communicate our environmental and social policies in all relevant languages for all employees, including contract and seasonal workers, and external stakeholders. We proactively engage to make sure that everyone understands.',
                            'type' => 2,
                            'order' => 6,
                            'score' => 5,
                        ],
                    ],
                ],
                7 => [
                    'parent_id' => 1,
                    'text' => 'Based on actions by our senior management, the following statement best reflects their level of commitment to our environmental and social policies:',
                    'type' => 1,
                    'order' => 7,
                    'answers' => [
                        1 => [
                            'text' => 'Senior management has no awareness or involvement.',
                            'type' => 2,
                            'order' => 1,
                            'score' => 0,
                        ],
                        2 => [
                            'text' => 'Senior management has delegated this activity and has limited involvement.',
                            'type' => 2,
                            'order' => 2,
                            'score' => 1,
                        ],
                        3 => [
                            'text' => 'Senior management communicates with lenders and customers about their requirements and then instructs the relevant employees to address the issue.',
                            'type' => 2,
                            'order' => 3,
                            'score' => 2,
                        ],
                        4 => [
                            'text' => 'Senior management communicates our environmental and social policy commitment to all levels of the company and in a public statement.',
                            'type' => 2,
                            'order' => 4,
                            'score' => 3,
                        ],
                        5 => [
                            'text' => 'Senior management makes a clear statement of commitment to all levels of the company and provides the necessary resources to implement the policies.',
                            'type' => 2,
                            'order' => 5,
                            'score' => 4,
                        ],
                        6 => [
                            'text' => 'Senior management participates in the formal review and revision of our environmental and social policies.  They provide the necessary resources to continually improve.  They communicate their commitment both internally and externally.',
                            'type' => 2,
                            'order' => 6,
                            'score' => 5,
                        ],
                    ],
                ],
            ]
        ];

        foreach ($datas as $data) {
            foreach ($data as $value) {
                $question = Question::query()->create([
                    'parent_id' => $value['parent_id'],
                    'text' => $value['text'],
                    'type' => $value['type'],
                    'order' => $value['order'],
                ]);
                if (isset($value['answers'])) {
                    foreach ($value['answers'] as $answerValue) {
                        Question::query()->create([
                            'parent_id' => $question->id,
                            'text' => $answerValue['text'],
                            'type' => $answerValue['type'],
                            'order' => $answerValue['order'],
                            'score' => $answerValue['score'],
                        ]);
                    }
                }
            }
        }
    }
}
