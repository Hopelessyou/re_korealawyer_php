<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::beginTransaction();
        try {
            // 1) 사용자 3명 (일반 1, 변호사 2)
            $memberId  = (string) Str::uuid();
            $lawyer1Id = (string) Str::uuid();
            $lawyer2Id = (string) Str::uuid();

            DB::table('users')->insert([
                [
                    'id' => $memberId,
                    'email' => 'user@test.com',
                    'password' => Hash::make('password'),
                    'name' => '일반회원',
                    'locale' => 'ko-KR',
                    'status' => 'active',
                    'meta' => json_encode([]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => $lawyer1Id,
                    'email' => 'lawyer1@test.com',
                    'password' => Hash::make('password'),
                    'name' => '김변호사',
                    'locale' => 'ko-KR',
                    'status' => 'active',
                    'meta' => json_encode([]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => $lawyer2Id,
                    'email' => 'lawyer2@test.com',
                    'password' => Hash::make('password'),
                    'name' => '박변호사',
                    'locale' => 'ko-KR',
                    'status' => 'active',
                    'meta' => json_encode([]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]);

            // 2) 변호사 프로필
            DB::table('lawyer_profiles')->insert([
                [
                    'user_id' => $lawyer1Id,
                    'license_no' => '2025-00001',
                    'verification_status' => 'verified',
                    'meta' => json_encode(['specialties'=>['형사','교통사고']]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'user_id' => $lawyer2Id,
                    'license_no' => '2025-00002',
                    'verification_status' => 'verified',
                    'meta' => json_encode(['specialties'=>['형사','민사']]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]);

            // 3) 로펌(알파로펌) + 프로필 + 소속
            $firmId = (string) Str::uuid();
            DB::table('orgs')->insert([
                'id' => $firmId,
                'type' => 'lawfirm',
                'name' => '알파로펌',
                'slug' => 'alpha-law',
                'meta' => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
            DB::table('lawfirm_profiles')->insert([
                'org_id' => $firmId,
                'intro'  => '형사/교통사고 특화 로펌입니다.',
                'meta'   => json_encode([]),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
            DB::table('memberships')->insert([
                [
                    'id' => (string) Str::uuid(),
                    'user_id' => $lawyer1Id,
                    'org_id'  => $firmId,
                    'role_in_org' => 'member',
                    'started_at' => $now,
                    'ended_at'   => null,
                ],
                [
                    'id' => (string) Str::uuid(),
                    'user_id' => $lawyer2Id,
                    'org_id'  => $firmId,
                    'role_in_org' => 'member',
                    'started_at' => $now,
                    'ended_at'   => null,
                ],
            ]);

            // 4) 해결사례 3건 (모두 로펌 소속, 공개 상태)
            $caseIds = [
                'acquittal' => (string) Str::uuid(),
                'reduction' => (string) Str::uuid(),
                'settlement'=> (string) Str::uuid(),
            ];

            DB::table('cases')->insert([
                [
                    'id' => $caseIds['acquittal'],
                    'org_id' => $firmId,
                    'title' => '음주운전 무죄 판결 사례',
                    'summary' => '절차상 하자로 무죄 선고.',
                    'body' => '시점/절차/증거 다툼으로 무죄 판결을 이끌어 냈습니다.',
                    'outcome_type' => 'acquittal',
                    'result_sentence_months' => null,
                    'result_amount_numeric' => null,
                    'status' => 'published',
                    'published_at' => now()->subDays(3),
                    'created_by' => $lawyer1Id,
                    'meta' => json_encode([]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => $caseIds['reduction'],
                    'org_id' => $firmId,
                    'title' => '폭행 사건 집행유예(감형) 사례',
                    'summary' => '합의 및 반성문으로 형량 감경.',
                    'body' => '피해자와의 원만한 합의 및 양형 요소를 충실히 소명.',
                    'outcome_type' => 'reduction',
                    'result_sentence_months' => 8,
                    'result_amount_numeric' => null,
                    'status' => 'published',
                    'published_at' => now()->subDays(2),
                    'created_by' => $lawyer2Id,
                    'meta' => json_encode([]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => $caseIds['settlement'],
                    'org_id' => $firmId,
                    'title' => '교통사고 손해배상 합의 사례(1,500만원)',
                    'summary' => '보험사와 1,500만원 합의.',
                    'body' => '과실비율 및 치료비 자료 정리로 합의금 상향.',
                    'outcome_type' => 'settlement',
                    'result_sentence_months' => null,
                    'result_amount_numeric' => 15000000,
                    'status' => 'published',
                    'published_at' => now()->subDay(),
                    'created_by' => $lawyer1Id,
                    'meta' => json_encode([]),
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]);

            // 사례-변호사 매핑
            DB::table('case_lawyers')->insert([
                ['case_id' => $caseIds['acquittal'], 'lawyer_user_id' => $lawyer1Id, 'role' => 'lead'],
                ['case_id' => $caseIds['acquittal'], 'lawyer_user_id' => $lawyer2Id, 'role' => 'member'],
                ['case_id' => $caseIds['reduction'], 'lawyer_user_id' => $lawyer2Id, 'role' => 'lead'],
                ['case_id' => $caseIds['settlement'],'lawyer_user_id' => $lawyer1Id, 'role' => 'lead'],
            ]);

            // 5) Q&A 1건 + 답변 및 채택
            $qId = (string) Str::uuid();
            DB::table('qna_questions')->insert([
                'id' => $qId,
                'author_user_id' => $memberId,
                'title' => '교통사고 형사합의가 잘 안 됩니다. 어떻게 해야 하나요?',
                'body'  => '피해자와 합의가 지연되고 있습니다. 준비할 증거와 절차가 궁금합니다.',
                'status'=> 'open',
                'view_count' => 0,
                'vote_count' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
            $answerId = (string) Str::uuid();
            DB::table('qna_answers')->insert([
                'id' => $answerId,
                'question_id' => $qId,
                'author_user_id' => $lawyer1Id,
                'body' => '치료비·수리비·소득감소 자료를 정리하고 진단서 등 객관적 자료를 준비하세요. 필요시 변호사를 통해 합의 제안서를 작성합니다.',
                'is_solution' => true,
                'vote_count' => 0,
                'created_at' => $now,
            ]);
            DB::table('qna_questions')->where('id', $qId)->update([
                'accepted_answer_id' => $answerId,
                'status' => 'answered',
                'updated_at' => now(),
            ]);

            // 6) 사례에 분야 태깅(형사/교통사고 등)
            $criminalId = DB::table('taxonomies')->where('type','field')->where('slug','criminal')->value('id');
            $trafficId  = DB::table('taxonomies')->where('type','field')->where('slug','traffic')->value('id');

            if ($criminalId) {
                DB::table('taggings')->insert([
                    ['id'=>Str::uuid(),'taxonomy_id'=>$criminalId,'resource_type'=>'case','resource_id'=>$caseIds['acquittal'],'weight'=>1,'created_at'=>$now,'updated_at'=>$now],
                    ['id'=>Str::uuid(),'taxonomy_id'=>$criminalId,'resource_type'=>'case','resource_id'=>$caseIds['reduction'],'weight'=>1,'created_at'=>$now,'updated_at'=>$now],
                ]);
            }
            if ($trafficId) {
                DB::table('taggings')->insert([
                    ['id'=>Str::uuid(),'taxonomy_id'=>$trafficId,'resource_type'=>'case','resource_id'=>$caseIds['settlement'],'weight'=>1,'created_at'=>$now,'updated_at'=>$now],
                ]);
            }

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
