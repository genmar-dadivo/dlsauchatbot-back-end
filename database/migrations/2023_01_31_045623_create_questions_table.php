<?php

use App\Models\Question;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->text('course');
            $table->text('question');
            $table->timestamps();
        });

        Question::create([
            'group_id' => 1,
            'question' => 'Must have a passion of lifelong learning.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be interested in new and trending items in the market.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have an exceptional communication skill.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have the ability to think strategically in different opportunities.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be a person that can work with different people with no exceptions.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be familiar with technology as a tool for future marketing opportunities.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have an open-mind to innovation.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to juggle and adapt traditional and modern way of learning such as investing and the like.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be creative and never settling for common ideas.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be familiar business related topics and the like.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must know the basic knowledge of understanding principles and concepts of Finance.',
            'course' => 'BSFM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be familiar with excel and other mathematical software tools.',
            'course' => 'BSFM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to have a good financial management.',
            'course' => 'BSFM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have a budgeting, planning, and forecasting skill.',
            'course' => 'BSFM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have an attention to detail and very particular with the changes of a specific plan.',
            'course' => 'BSFM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be tech-savvy for it has a lot of calculations and financial related statements.',
            'course' => 'BSFM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be open-minded when it comes to different opportunities on how to manage a finance.',
            'course' => 'BSFM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to juggle and adapt traditional and modern way of learning such as investing and the like.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have interest in social and economic crisis.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be familiar with assets, profit, and resources in general when it comes to finance.',
            'course' => 'BSMM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have a leadership skill and can handle complex planning.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to do multi-tasking and does it all simultaneously.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to create a connection with other people.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be interested in learning different cultures and traditions.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be a person that can work under huge amount of pressure and has a high level of stress tolerance.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be a person who is interested in learning the broad topic of proper safety and hygiene.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be a person who can interact with different people may it be through other gender or race.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be a person that can give consistent results.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be creative and have a passion for service towards other people.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be committed in learning and applying different ethical practices.',
            'course' => 'BSHM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have a pleasing personality which it pertains as the most crucial quality of being a tourism student.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to have an exceptional communication skill as it involves a lot of contacts with different people of different ages, nationalities, backgrounds and temperaments.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have an interest to study different languages.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have a serviceable skill which include a "can-do" attitude. Challenging tasks will always be waving and expected to be resolved right away.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be amiable and able to handle different serviceable acts simultaneously.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be conscious of the environment and have an interest to study about different cultures, places and traditions.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to adapt quickly to a certain environment.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to deal and handle stress and time management.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have a willingness to always try something new.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have an ability to grasp innovations of new technologies.',
            'course' => 'BSTM',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have integrity in keeping information confidential especially in both legal and professional principle.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be knowledgeable in excel because it is a vital tool for them to manage the accounts in the future.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to have a good budget management. *in general : Resources, Time
            Must be familiar with law, auditing, taxes, account management and other financial related and also other law related courses
            .',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be detail-oriented to the extent that there will be no room for a small error in numbers, accounts, and the like.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be able to apply the values of being a Lasallian throughout the industry.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be passionate in problem-solving and also passionate their skills in reading and analysis.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be a person that is organized and systematic.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must have a business knowledge in understanding different business transactions.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 1,
            'question' => 'Must be trustworthy and have a service-oriented mindset.',
            'course' => 'BS ACC',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must have immense patience.',
            'course' => 'BS Elementary|BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must have good communication skills.',
            'course' => 'BS Elementary|BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be able to study under pressure and independently.',
            'course' => 'BS Elementary|BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be able to tolerate mathematical problems despite pursuing different major.',
            'course' => 'BS Elementary|BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must have empathy towards other people.',
            'course' => 'BS Elementary|BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be consistent in everything he/she does.',
            'course' => 'BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be willing to study a subject that will be his/her major.',
            'course' => 'BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must have a good understanding of the importance of mental health.',
            'course' => 'BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be passionate as a student.',
            'course' => 'BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be creative.',
            'course' => 'BS Secondary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must have a good sense of humor.',
            'course' => 'BS Elementary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must love children.',
            'course' => 'BS Elementary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be resourceful.',
            'course' => 'BS Elementary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must have great classroom management skill.',
            'course' => 'BS Elementary',
        ]);

        Question::create([
            'group_id' => 2,
            'question' => 'Must be interested in educational theories.',
            'course' => 'BS Elementary',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};
