<?php

namespace App\DataFixtures;

use App\Entity\ModuleComponent;
use App\DataFixtures\ModuleFixtures;
use App\DataFixtures\ComponentFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ModuleComponentFixtures extends Fixture implements DependentFixtureInterface
{

    public const MODULE_COMPONENT_1_REFERENCE = 'module-component-1';
    public const MODULE_COMPONENT_2_REFERENCE = 'module-component-2';
    public const MODULE_COMPONENT_3_REFERENCE = 'module-component-3';
    public const MODULE_COMPONENT_4_REFERENCE = 'module-component-4';
    public const MODULE_COMPONENT_5_REFERENCE = 'module-component-5';
    public const MODULE_COMPONENT_6_REFERENCE = 'module-component-6';
    public const MODULE_COMPONENT_7_REFERENCE = 'module-component-7';
    public const MODULE_COMPONENT_8_REFERENCE = 'module-component-8';
    public const MODULE_COMPONENT_9_REFERENCE = 'module-component-9';
    public const MODULE_COMPONENT_10_REFERENCE = 'module-component-10';
    public const MODULE_COMPONENT_11_REFERENCE = 'module-component-11';
    public const MODULE_COMPONENT_12_REFERENCE = 'module-component-12';
    public const MODULE_COMPONENT_13_REFERENCE = 'module-component-13';
    public const MODULE_COMPONENT_14_REFERENCE = 'module-component-14';
    public const MODULE_COMPONENT_15_REFERENCE = 'module-component-15';
    public const MODULE_COMPONENT_16_REFERENCE = 'module-component-16';
    public const MODULE_COMPONENT_17_REFERENCE = 'module-component-17';
    public const MODULE_COMPONENT_18_REFERENCE = 'module-component-18';
    public const MODULE_COMPONENT_19_REFERENCE = 'module-component-19';
    public const MODULE_COMPONENT_20_REFERENCE = 'module-component-20';
    public const MODULE_COMPONENT_21_REFERENCE = 'module-component-21';
    public const MODULE_COMPONENT_22_REFERENCE = 'module-component-22';
    public const MODULE_COMPONENT_23_REFERENCE = 'module-component-23';
    public const MODULE_COMPONENT_24_REFERENCE = 'module-component-24';
    public const MODULE_COMPONENT_25_REFERENCE = 'module-component-25';
    public const MODULE_COMPONENT_26_REFERENCE = 'module-component-26';
    public const MODULE_COMPONENT_27_REFERENCE = 'module-component-27';
    public const MODULE_COMPONENT_28_REFERENCE = 'module-component-28';
    public const MODULE_COMPONENT_29_REFERENCE = 'module-component-29';
    public const MODULE_COMPONENT_30_REFERENCE = 'module-component-30';
    public const MODULE_COMPONENT_31_REFERENCE = 'module-component-31';
    public const MODULE_COMPONENT_32_REFERENCE = 'module-component-32';
    public const MODULE_COMPONENT_33_REFERENCE = 'module-component-33';
    public const MODULE_COMPONENT_34_REFERENCE = 'module-component-34';
    public const MODULE_COMPONENT_35_REFERENCE = 'module-component-35';
    public const MODULE_COMPONENT_36_REFERENCE = 'module-component-36';
    public const MODULE_COMPONENT_37_REFERENCE = 'module-component-37';
    public const MODULE_COMPONENT_38_REFERENCE = 'module-component-38';
    public const MODULE_COMPONENT_39_REFERENCE = 'module-component-39';
    public const MODULE_COMPONENT_40_REFERENCE = 'module-component-40';
    public const MODULE_COMPONENT_41_REFERENCE = 'module-component-41';
    public const MODULE_COMPONENT_42_REFERENCE = 'module-component-42';
    public const MODULE_COMPONENT_43_REFERENCE = 'module-component-43';
    public const MODULE_COMPONENT_44_REFERENCE = 'module-component-44';
    public const MODULE_COMPONENT_45_REFERENCE = 'module-component-45';
    public const MODULE_COMPONENT_46_REFERENCE = 'module-component-46';
    public const MODULE_COMPONENT_47_REFERENCE = 'module-component-47';
    public const MODULE_COMPONENT_48_REFERENCE = 'module-component-48';
    public const MODULE_COMPONENT_49_REFERENCE = 'module-component-49';
    public const MODULE_COMPONENT_50_REFERENCE = 'module-component-50';
    public const MODULE_COMPONENT_51_REFERENCE = 'module-component-51';
    public const MODULE_COMPONENT_52_REFERENCE = 'module-component-52';
    public const MODULE_COMPONENT_53_REFERENCE = 'module-component-53';
    public const MODULE_COMPONENT_54_REFERENCE = 'module-component-54';
    public const MODULE_COMPONENT_55_REFERENCE = 'module-component-55';
    public const MODULE_COMPONENT_56_REFERENCE = 'module-component-56';
    public const MODULE_COMPONENT_57_REFERENCE = 'module-component-57';
    public const MODULE_COMPONENT_58_REFERENCE = 'module-component-58';
    public const MODULE_COMPONENT_59_REFERENCE = 'module-component-59';
    public const MODULE_COMPONENT_60_REFERENCE = 'module-component-60';
    public const MODULE_COMPONENT_61_REFERENCE = 'module-component-61';
    public const MODULE_COMPONENT_62_REFERENCE = 'module-component-62';
    public const MODULE_COMPONENT_63_REFERENCE = 'module-component-63';
    public const MODULE_COMPONENT_64_REFERENCE = 'module-component-64';
    public const MODULE_COMPONENT_65_REFERENCE = 'module-component-65';
    public const MODULE_COMPONENT_66_REFERENCE = 'module-component-66';
    public const MODULE_COMPONENT_67_REFERENCE = 'module-component-67';
    public const MODULE_COMPONENT_68_REFERENCE = 'module-component-68';
    public const MODULE_COMPONENT_69_REFERENCE = 'module-component-69';
    public const MODULE_COMPONENT_70_REFERENCE = 'module-component-70';
    public const MODULE_COMPONENT_71_REFERENCE = 'module-component-71';
    public const MODULE_COMPONENT_72_REFERENCE = 'module-component-72';
    public const MODULE_COMPONENT_73_REFERENCE = 'module-component-73';
    public const MODULE_COMPONENT_74_REFERENCE = 'module-component-74';
    public const MODULE_COMPONENT_75_REFERENCE = 'module-component-75';
    public const MODULE_COMPONENT_76_REFERENCE = 'module-component-76';
    public const MODULE_COMPONENT_77_REFERENCE = 'module-component-77';
    public const MODULE_COMPONENT_78_REFERENCE = 'module-component-78';
    public const MODULE_COMPONENT_79_REFERENCE = 'module-component-79';
    public const MODULE_COMPONENT_80_REFERENCE = 'module-component-80';
    public const MODULE_COMPONENT_81_REFERENCE = 'module-component-81';
    public const MODULE_COMPONENT_82_REFERENCE = 'module-component-82';
    public const MODULE_COMPONENT_83_REFERENCE = 'module-component-83';
    public const MODULE_COMPONENT_84_REFERENCE = 'module-component-84';
    public const MODULE_COMPONENT_85_REFERENCE = 'module-component-85';
    public const MODULE_COMPONENT_86_REFERENCE = 'module-component-86';
    public const MODULE_COMPONENT_87_REFERENCE = 'module-component-87';
    public const MODULE_COMPONENT_88_REFERENCE = 'module-component-88';
    public const MODULE_COMPONENT_89_REFERENCE = 'module-component-89';
    public const MODULE_COMPONENT_90_REFERENCE = 'module-component-90';
    public const MODULE_COMPONENT_91_REFERENCE = 'module-component-91';
    public const MODULE_COMPONENT_92_REFERENCE = 'module-component-92';
    public const MODULE_COMPONENT_93_REFERENCE = 'module-component-93';
    public const MODULE_COMPONENT_94_REFERENCE = 'module-component-94';
    public const MODULE_COMPONENT_95_REFERENCE = 'module-component-95';
    public const MODULE_COMPONENT_96_REFERENCE = 'module-component-96';
    public const MODULE_COMPONENT_97_REFERENCE = 'module-component-97';
    public const MODULE_COMPONENT_98_REFERENCE = 'module-component-98';
    public const MODULE_COMPONENT_99_REFERENCE = 'module-component-99';
    public const MODULE_COMPONENT_100_REFERENCE = 'module-component-100';
    public const MODULE_COMPONENT_101_REFERENCE = 'module-component-101';
    public const MODULE_COMPONENT_102_REFERENCE = 'module-component-102';
    public const MODULE_COMPONENT_103_REFERENCE = 'module-component-103';
    public const MODULE_COMPONENT_104_REFERENCE = 'module-component-104';
    public const MODULE_COMPONENT_105_REFERENCE = 'module-component-105';
    public const MODULE_COMPONENT_106_REFERENCE = 'module-component-106';
    public const MODULE_COMPONENT_107_REFERENCE = 'module-component-107';
    public const MODULE_COMPONENT_108_REFERENCE = 'module-component-108';
    public const MODULE_COMPONENT_109_REFERENCE = 'module-component-109';
    public const MODULE_COMPONENT_110_REFERENCE = 'module-component-110';
    public const MODULE_COMPONENT_111_REFERENCE = 'module-component-111';
    public const MODULE_COMPONENT_112_REFERENCE = 'module-component-112';
    public const MODULE_COMPONENT_113_REFERENCE = 'module-component-113';
    public const MODULE_COMPONENT_114_REFERENCE = 'module-component-114';
    public const MODULE_COMPONENT_115_REFERENCE = 'module-component-115';
    public const MODULE_COMPONENT_116_REFERENCE = 'module-component-116';
    public const MODULE_COMPONENT_117_REFERENCE = 'module-component-117';
    public const MODULE_COMPONENT_118_REFERENCE = 'module-component-118';
    public const MODULE_COMPONENT_119_REFERENCE = 'module-component-119';
    public const MODULE_COMPONENT_120_REFERENCE = 'module-component-120';
    public const MODULE_COMPONENT_121_REFERENCE = 'module-component-121';
    public const MODULE_COMPONENT_122_REFERENCE = 'module-component-122';
    public const MODULE_COMPONENT_123_REFERENCE = 'module-component-123';
    public const MODULE_COMPONENT_124_REFERENCE = 'module-component-124';
    public const MODULE_COMPONENT_125_REFERENCE = 'module-component-125';
    public const MODULE_COMPONENT_126_REFERENCE = 'module-component-126';
    public const MODULE_COMPONENT_127_REFERENCE = 'module-component-127';
    public const MODULE_COMPONENT_128_REFERENCE = 'module-component-128';
    public const MODULE_COMPONENT_129_REFERENCE = 'module-component-129';
    public const MODULE_COMPONENT_130_REFERENCE = 'module-component-130';
    public const MODULE_COMPONENT_131_REFERENCE = 'module-component-131';
    public const MODULE_COMPONENT_132_REFERENCE = 'module-component-132';
    public const MODULE_COMPONENT_133_REFERENCE = 'module-component-133';
    public const MODULE_COMPONENT_134_REFERENCE = 'module-component-134';
    public const MODULE_COMPONENT_135_REFERENCE = 'module-component-135';
    public const MODULE_COMPONENT_136_REFERENCE = 'module-component-136';
    public const MODULE_COMPONENT_137_REFERENCE = 'module-component-137';
    public const MODULE_COMPONENT_138_REFERENCE = 'module-component-138';
    public const MODULE_COMPONENT_139_REFERENCE = 'module-component-139';
    public const MODULE_COMPONENT_140_REFERENCE = 'module-component-140';
    public const MODULE_COMPONENT_141_REFERENCE = 'module-component-141';
    public const MODULE_COMPONENT_142_REFERENCE = 'module-component-142';
    public const MODULE_COMPONENT_143_REFERENCE = 'module-component-143';
    public const MODULE_COMPONENT_144_REFERENCE = 'module-component-144';
    public const MODULE_COMPONENT_145_REFERENCE = 'module-component-145';
    public const MODULE_COMPONENT_146_REFERENCE = 'module-component-146';
    public const MODULE_COMPONENT_147_REFERENCE = 'module-component-147';
    public const MODULE_COMPONENT_148_REFERENCE = 'module-component-148';
    public const MODULE_COMPONENT_149_REFERENCE = 'module-component-149';
    public const MODULE_COMPONENT_150_REFERENCE = 'module-component-150';
    public const MODULE_COMPONENT_151_REFERENCE = 'module-component-151';
    public const MODULE_COMPONENT_152_REFERENCE = 'module-component-152';
    public const MODULE_COMPONENT_153_REFERENCE = 'module-component-153';
    public const MODULE_COMPONENT_154_REFERENCE = 'module-component-154';
    public const MODULE_COMPONENT_155_REFERENCE = 'module-component-155';
    public const MODULE_COMPONENT_156_REFERENCE = 'module-component-156';
    public const MODULE_COMPONENT_157_REFERENCE = 'module-component-157';
    public const MODULE_COMPONENT_158_REFERENCE = 'module-component-158';
    public const MODULE_COMPONENT_159_REFERENCE = 'module-component-159';
    public const MODULE_COMPONENT_160_REFERENCE = 'module-component-160';
    public const MODULE_COMPONENT_161_REFERENCE = 'module-component-161';
    public const MODULE_COMPONENT_162_REFERENCE = 'module-component-162';
    public const MODULE_COMPONENT_163_REFERENCE = 'module-component-163';
    public const MODULE_COMPONENT_164_REFERENCE = 'module-component-164';
    public const MODULE_COMPONENT_165_REFERENCE = 'module-component-165';
    public const MODULE_COMPONENT_166_REFERENCE = 'module-component-166';
    public const MODULE_COMPONENT_167_REFERENCE = 'module-component-167';
    public const MODULE_COMPONENT_168_REFERENCE = 'module-component-168';
    public const MODULE_COMPONENT_169_REFERENCE = 'module-component-169';
    public const MODULE_COMPONENT_170_REFERENCE = 'module-component-170';
    public const MODULE_COMPONENT_171_REFERENCE = 'module-component-171';
    public const MODULE_COMPONENT_172_REFERENCE = 'module-component-172';
    public const MODULE_COMPONENT_173_REFERENCE = 'module-component-173';
    public const MODULE_COMPONENT_174_REFERENCE = 'module-component-174';
    public const MODULE_COMPONENT_175_REFERENCE = 'module-component-175';
    public const MODULE_COMPONENT_176_REFERENCE = 'module-component-176';
    public const MODULE_COMPONENT_177_REFERENCE = 'module-component-177';
    public const MODULE_COMPONENT_178_REFERENCE = 'module-component-178';
    public const MODULE_COMPONENT_179_REFERENCE = 'module-component-179';
    public const MODULE_COMPONENT_180_REFERENCE = 'module-component-180';
    public const MODULE_COMPONENT_181_REFERENCE = 'module-component-181';
    public const MODULE_COMPONENT_182_REFERENCE = 'module-component-182';
    public const MODULE_COMPONENT_183_REFERENCE = 'module-component-183';
    public const MODULE_COMPONENT_184_REFERENCE = 'module-component-184';
    public const MODULE_COMPONENT_185_REFERENCE = 'module-component-185';
    public const MODULE_COMPONENT_186_REFERENCE = 'module-component-186';
    public const MODULE_COMPONENT_187_REFERENCE = 'module-component-187';
    public const MODULE_COMPONENT_188_REFERENCE = 'module-component-188';
    public const MODULE_COMPONENT_189_REFERENCE = 'module-component-189';
    public const MODULE_COMPONENT_190_REFERENCE = 'module-component-190';
    public const MODULE_COMPONENT_191_REFERENCE = 'module-component-191';
    public const MODULE_COMPONENT_192_REFERENCE = 'module-component-192';
    public const MODULE_COMPONENT_193_REFERENCE = 'module-component-193';
    public const MODULE_COMPONENT_194_REFERENCE = 'module-component-194';
    public const MODULE_COMPONENT_195_REFERENCE = 'module-component-195';
    public const MODULE_COMPONENT_196_REFERENCE = 'module-component-196';
    public const MODULE_COMPONENT_197_REFERENCE = 'module-component-197';
    public const MODULE_COMPONENT_198_REFERENCE = 'module-component-198';
    public const MODULE_COMPONENT_199_REFERENCE = 'module-component-199';
    public const MODULE_COMPONENT_200_REFERENCE = 'module-component-200';
    public const MODULE_COMPONENT_201_REFERENCE = 'module-component-201';
    public const MODULE_COMPONENT_202_REFERENCE = 'module-component-202';
    public const MODULE_COMPONENT_203_REFERENCE = 'module-component-203';
    public const MODULE_COMPONENT_204_REFERENCE = 'module-component-204';
    public const MODULE_COMPONENT_205_REFERENCE = 'module-component-205';
    public const MODULE_COMPONENT_206_REFERENCE = 'module-component-206';
    public const MODULE_COMPONENT_207_REFERENCE = 'module-component-207';
    public const MODULE_COMPONENT_208_REFERENCE = 'module-component-208';
    public const MODULE_COMPONENT_209_REFERENCE = 'module-component-209';
    public const MODULE_COMPONENT_210_REFERENCE = 'module-component-210';
    public const MODULE_COMPONENT_211_REFERENCE = 'module-component-211';
    public const MODULE_COMPONENT_212_REFERENCE = 'module-component-212';
    public const MODULE_COMPONENT_213_REFERENCE = 'module-component-213';
    public const MODULE_COMPONENT_214_REFERENCE = 'module-component-214';
    public const MODULE_COMPONENT_215_REFERENCE = 'module-component-215';
    public const MODULE_COMPONENT_216_REFERENCE = 'module-component-216';
    public const MODULE_COMPONENT_217_REFERENCE = 'module-component-217';
    public const MODULE_COMPONENT_218_REFERENCE = 'module-component-218';
    public const MODULE_COMPONENT_219_REFERENCE = 'module-component-219';
    public const MODULE_COMPONENT_220_REFERENCE = 'module-component-220';
    public const MODULE_COMPONENT_221_REFERENCE = 'module-component-221';
    public const MODULE_COMPONENT_222_REFERENCE = 'module-component-222';
    public const MODULE_COMPONENT_223_REFERENCE = 'module-component-223';
    public const MODULE_COMPONENT_224_REFERENCE = 'module-component-224';
    public const MODULE_COMPONENT_225_REFERENCE = 'module-component-225';
    public const MODULE_COMPONENT_226_REFERENCE = 'module-component-226';
    public const MODULE_COMPONENT_227_REFERENCE = 'module-component-227';
    public const MODULE_COMPONENT_228_REFERENCE = 'module-component-228';
    public const MODULE_COMPONENT_229_REFERENCE = 'module-component-229';
    public const MODULE_COMPONENT_230_REFERENCE = 'module-component-230';
    public const MODULE_COMPONENT_231_REFERENCE = 'module-component-231';
    public const MODULE_COMPONENT_232_REFERENCE = 'module-component-232';
    public const MODULE_COMPONENT_233_REFERENCE = 'module-component-233';
    public const MODULE_COMPONENT_234_REFERENCE = 'module-component-234';
    public const MODULE_COMPONENT_235_REFERENCE = 'module-component-235';
    public const MODULE_COMPONENT_236_REFERENCE = 'module-component-236';
    public const MODULE_COMPONENT_237_REFERENCE = 'module-component-237';
    public const MODULE_COMPONENT_238_REFERENCE = 'module-component-238';
    public const MODULE_COMPONENT_239_REFERENCE = 'module-component-239';
    public const MODULE_COMPONENT_240_REFERENCE = 'module-component-240';
    public const MODULE_COMPONENT_241_REFERENCE = 'module-component-241';
    public const MODULE_COMPONENT_242_REFERENCE = 'module-component-242';
    public const MODULE_COMPONENT_243_REFERENCE = 'module-component-243';
    public const MODULE_COMPONENT_244_REFERENCE = 'module-component-244';
    public const MODULE_COMPONENT_245_REFERENCE = 'module-component-245';
    public const MODULE_COMPONENT_246_REFERENCE = 'module-component-246';
    public const MODULE_COMPONENT_247_REFERENCE = 'module-component-247';
    public const MODULE_COMPONENT_248_REFERENCE = 'module-component-248';
    public const MODULE_COMPONENT_249_REFERENCE = 'module-component-249';
    public const MODULE_COMPONENT_250_REFERENCE = 'module-component-250';
    public const MODULE_COMPONENT_251_REFERENCE = 'module-component-251';
    public const MODULE_COMPONENT_252_REFERENCE = 'module-component-252';
    public const MODULE_COMPONENT_253_REFERENCE = 'module-component-253';
    public const MODULE_COMPONENT_254_REFERENCE = 'module-component-254';
    public const MODULE_COMPONENT_255_REFERENCE = 'module-component-255';
    public const MODULE_COMPONENT_256_REFERENCE = 'module-component-256';
    public const MODULE_COMPONENT_257_REFERENCE = 'module-component-257';
    public const MODULE_COMPONENT_258_REFERENCE = 'module-component-258';
    public const MODULE_COMPONENT_259_REFERENCE = 'module-component-259';
    public const MODULE_COMPONENT_260_REFERENCE = 'module-component-260';
    public const MODULE_COMPONENT_261_REFERENCE = 'module-component-261';
    public const MODULE_COMPONENT_262_REFERENCE = 'module-component-262';
    public const MODULE_COMPONENT_263_REFERENCE = 'module-component-263';
    public const MODULE_COMPONENT_264_REFERENCE = 'module-component-264';
    public const MODULE_COMPONENT_265_REFERENCE = 'module-component-265';
    public const MODULE_COMPONENT_266_REFERENCE = 'module-component-266';
    public const MODULE_COMPONENT_267_REFERENCE = 'module-component-267';
    public const MODULE_COMPONENT_268_REFERENCE = 'module-component-268';
    public const MODULE_COMPONENT_269_REFERENCE = 'module-component-269';
    public const MODULE_COMPONENT_270_REFERENCE = 'module-component-270';
    public const MODULE_COMPONENT_271_REFERENCE = 'module-component-271';
    public const MODULE_COMPONENT_272_REFERENCE = 'module-component-272';
    public const MODULE_COMPONENT_273_REFERENCE = 'module-component-273';
    public const MODULE_COMPONENT_274_REFERENCE = 'module-component-274';
    public const MODULE_COMPONENT_275_REFERENCE = 'module-component-275';
    public const MODULE_COMPONENT_276_REFERENCE = 'module-component-276';
    public const MODULE_COMPONENT_277_REFERENCE = 'module-component-277';
    public const MODULE_COMPONENT_278_REFERENCE = 'module-component-278';
    public const MODULE_COMPONENT_279_REFERENCE = 'module-component-279';
    public const MODULE_COMPONENT_280_REFERENCE = 'module-component-280';
    public const MODULE_COMPONENT_281_REFERENCE = 'module-component-281';
    public const MODULE_COMPONENT_282_REFERENCE = 'module-component-282';
    public const MODULE_COMPONENT_283_REFERENCE = 'module-component-283';
    public const MODULE_COMPONENT_284_REFERENCE = 'module-component-284';
    public const MODULE_COMPONENT_285_REFERENCE = 'module-component-285';
    public const MODULE_COMPONENT_286_REFERENCE = 'module-component-286';
    public const MODULE_COMPONENT_287_REFERENCE = 'module-component-287';
    public const MODULE_COMPONENT_288_REFERENCE = 'module-component-288';
    public const MODULE_COMPONENT_289_REFERENCE = 'module-component-289';
    public const MODULE_COMPONENT_290_REFERENCE = 'module-component-290';
    public const MODULE_COMPONENT_291_REFERENCE = 'module-component-291';
    public const MODULE_COMPONENT_292_REFERENCE = 'module-component-292';
    public const MODULE_COMPONENT_293_REFERENCE = 'module-component-293';
    public const MODULE_COMPONENT_294_REFERENCE = 'module-component-294';
    public const MODULE_COMPONENT_295_REFERENCE = 'module-component-295';
    public const MODULE_COMPONENT_296_REFERENCE = 'module-component-296';
    public const MODULE_COMPONENT_297_REFERENCE = 'module-component-297';
    public const MODULE_COMPONENT_298_REFERENCE = 'module-component-298';
    public const MODULE_COMPONENT_299_REFERENCE = 'module-component-299';
    public const MODULE_COMPONENT_300_REFERENCE = 'module-component-300';
    public const MODULE_COMPONENT_301_REFERENCE = 'module-component-301';
    public const MODULE_COMPONENT_302_REFERENCE = 'module-component-302';
    public const MODULE_COMPONENT_303_REFERENCE = 'module-component-303';
    public const MODULE_COMPONENT_304_REFERENCE = 'module-component-304';
    public const MODULE_COMPONENT_305_REFERENCE = 'module-component-305';
    public const MODULE_COMPONENT_306_REFERENCE = 'module-component-306';
    public const MODULE_COMPONENT_307_REFERENCE = 'module-component-307';
    public const MODULE_COMPONENT_308_REFERENCE = 'module-component-308';
    public const MODULE_COMPONENT_309_REFERENCE = 'module-component-309';
    public const MODULE_COMPONENT_310_REFERENCE = 'module-component-310';
    public const MODULE_COMPONENT_311_REFERENCE = 'module-component-311';
    public const MODULE_COMPONENT_312_REFERENCE = 'module-component-312';
    public const MODULE_COMPONENT_313_REFERENCE = 'module-component-313';
    public const MODULE_COMPONENT_314_REFERENCE = 'module-component-314';
    public const MODULE_COMPONENT_315_REFERENCE = 'module-component-315';
    public const MODULE_COMPONENT_316_REFERENCE = 'module-component-316';
    public const MODULE_COMPONENT_317_REFERENCE = 'module-component-317';
    public const MODULE_COMPONENT_318_REFERENCE = 'module-component-318';
    public const MODULE_COMPONENT_319_REFERENCE = 'module-component-319';
    public const MODULE_COMPONENT_320_REFERENCE = 'module-component-320';
    public const MODULE_COMPONENT_321_REFERENCE = 'module-component-321';
    public const MODULE_COMPONENT_322_REFERENCE = 'module-component-322';
    public const MODULE_COMPONENT_323_REFERENCE = 'module-component-323';
    public const MODULE_COMPONENT_324_REFERENCE = 'module-component-324';
    public const MODULE_COMPONENT_325_REFERENCE = 'module-component-325';
    public const MODULE_COMPONENT_326_REFERENCE = 'module-component-326';
    public const MODULE_COMPONENT_327_REFERENCE = 'module-component-327';
    public const MODULE_COMPONENT_328_REFERENCE = 'module-component-328';
    public const MODULE_COMPONENT_329_REFERENCE = 'module-component-329';
    public const MODULE_COMPONENT_330_REFERENCE = 'module-component-330';
    public const MODULE_COMPONENT_331_REFERENCE = 'module-component-331';
    public const MODULE_COMPONENT_332_REFERENCE = 'module-component-332';
    public const MODULE_COMPONENT_333_REFERENCE = 'module-component-333';
    public const MODULE_COMPONENT_334_REFERENCE = 'module-component-334';
    public const MODULE_COMPONENT_335_REFERENCE = 'module-component-335';
    public const MODULE_COMPONENT_336_REFERENCE = 'module-component-336';
    public const MODULE_COMPONENT_337_REFERENCE = 'module-component-337';
    public const MODULE_COMPONENT_338_REFERENCE = 'module-component-338';
    public const MODULE_COMPONENT_339_REFERENCE = 'module-component-339';
    public const MODULE_COMPONENT_340_REFERENCE = 'module-component-340';
    public const MODULE_COMPONENT_341_REFERENCE = 'module-component-341';
    public const MODULE_COMPONENT_342_REFERENCE = 'module-component-342';
    public const MODULE_COMPONENT_343_REFERENCE = 'module-component-343';
    public const MODULE_COMPONENT_344_REFERENCE = 'module-component-344';
    public const MODULE_COMPONENT_345_REFERENCE = 'module-component-345';
    public const MODULE_COMPONENT_346_REFERENCE = 'module-component-346';
    public const MODULE_COMPONENT_347_REFERENCE = 'module-component-347';
    public const MODULE_COMPONENT_348_REFERENCE = 'module-component-348';
    public const MODULE_COMPONENT_349_REFERENCE = 'module-component-349';
    public const MODULE_COMPONENT_350_REFERENCE = 'module-component-350';
    public const MODULE_COMPONENT_351_REFERENCE = 'module-component-351';
    public const MODULE_COMPONENT_352_REFERENCE = 'module-component-352';
    public const MODULE_COMPONENT_353_REFERENCE = 'module-component-353';
    public const MODULE_COMPONENT_354_REFERENCE = 'module-component-354';
    public const MODULE_COMPONENT_355_REFERENCE = 'module-component-355';
    public const MODULE_COMPONENT_356_REFERENCE = 'module-component-356';
    public const MODULE_COMPONENT_357_REFERENCE = 'module-component-357';
    public const MODULE_COMPONENT_358_REFERENCE = 'module-component-358';
    public const MODULE_COMPONENT_359_REFERENCE = 'module-component-359';
    public const MODULE_COMPONENT_360_REFERENCE = 'module-component-360';
    public const MODULE_COMPONENT_361_REFERENCE = 'module-component-361';
    public const MODULE_COMPONENT_362_REFERENCE = 'module-component-362';
    public const MODULE_COMPONENT_363_REFERENCE = 'module-component-363';
    public const MODULE_COMPONENT_364_REFERENCE = 'module-component-364';
    public const MODULE_COMPONENT_365_REFERENCE = 'module-component-365';
    public const MODULE_COMPONENT_366_REFERENCE = 'module-component-366';
    public const MODULE_COMPONENT_367_REFERENCE = 'module-component-367';
    public const MODULE_COMPONENT_368_REFERENCE = 'module-component-368';
    public const MODULE_COMPONENT_369_REFERENCE = 'module-component-369';
    public const MODULE_COMPONENT_370_REFERENCE = 'module-component-370';
    public const MODULE_COMPONENT_371_REFERENCE = 'module-component-371';
    public const MODULE_COMPONENT_372_REFERENCE = 'module-component-372';
    public const MODULE_COMPONENT_373_REFERENCE = 'module-component-373';
    public const MODULE_COMPONENT_374_REFERENCE = 'module-component-374';
    public const MODULE_COMPONENT_375_REFERENCE = 'module-component-375';
    public const MODULE_COMPONENT_376_REFERENCE = 'module-component-376';
    public const MODULE_COMPONENT_377_REFERENCE = 'module-component-377';
    public const MODULE_COMPONENT_378_REFERENCE = 'module-component-378';
    public const MODULE_COMPONENT_379_REFERENCE = 'module-component-379';
    public const MODULE_COMPONENT_380_REFERENCE = 'module-component-380';
    public const MODULE_COMPONENT_381_REFERENCE = 'module-component-381';
    public const MODULE_COMPONENT_382_REFERENCE = 'module-component-382';
    public const MODULE_COMPONENT_383_REFERENCE = 'module-component-383';
    public const MODULE_COMPONENT_384_REFERENCE = 'module-component-384';
    public const MODULE_COMPONENT_385_REFERENCE = 'module-component-385';
    public const MODULE_COMPONENT_386_REFERENCE = 'module-component-386';
    public const MODULE_COMPONENT_387_REFERENCE = 'module-component-387';
    public const MODULE_COMPONENT_388_REFERENCE = 'module-component-388';
    public const MODULE_COMPONENT_389_REFERENCE = 'module-component-389';
    public const MODULE_COMPONENT_390_REFERENCE = 'module-component-390';
    public const MODULE_COMPONENT_391_REFERENCE = 'module-component-391';
    public const MODULE_COMPONENT_392_REFERENCE = 'module-component-392';
    public const MODULE_COMPONENT_393_REFERENCE = 'module-component-393';
    public const MODULE_COMPONENT_394_REFERENCE = 'module-component-394';
    public const MODULE_COMPONENT_395_REFERENCE = 'module-component-395';
    public const MODULE_COMPONENT_396_REFERENCE = 'module-component-396';
    public const MODULE_COMPONENT_397_REFERENCE = 'module-component-397';
    public const MODULE_COMPONENT_398_REFERENCE = 'module-component-398';
    public const MODULE_COMPONENT_399_REFERENCE = 'module-component-399';
    public const MODULE_COMPONENT_400_REFERENCE = 'module-component-400';
    public const MODULE_COMPONENT_401_REFERENCE = 'module-component-401';
    public const MODULE_COMPONENT_402_REFERENCE = 'module-component-402';
    public const MODULE_COMPONENT_403_REFERENCE = 'module-component-403';
    public const MODULE_COMPONENT_404_REFERENCE = 'module-component-404';
    public const MODULE_COMPONENT_405_REFERENCE = 'module-component-405';
    public const MODULE_COMPONENT_406_REFERENCE = 'module-component-406';
    public const MODULE_COMPONENT_407_REFERENCE = 'module-component-407';
    public const MODULE_COMPONENT_408_REFERENCE = 'module-component-408';
    public const MODULE_COMPONENT_409_REFERENCE = 'module-component-409';
    public const MODULE_COMPONENT_410_REFERENCE = 'module-component-410';
    public const MODULE_COMPONENT_411_REFERENCE = 'module-component-411';
    public const MODULE_COMPONENT_412_REFERENCE = 'module-component-412';
    public const MODULE_COMPONENT_413_REFERENCE = 'module-component-413';
    public const MODULE_COMPONENT_414_REFERENCE = 'module-component-414';
    public const MODULE_COMPONENT_415_REFERENCE = 'module-component-415';
    public const MODULE_COMPONENT_416_REFERENCE = 'module-component-416';
    public const MODULE_COMPONENT_417_REFERENCE = 'module-component-417';
    public const MODULE_COMPONENT_418_REFERENCE = 'module-component-418';
    public const MODULE_COMPONENT_419_REFERENCE = 'module-component-419';
    public const MODULE_COMPONENT_420_REFERENCE = 'module-component-420';
    public const MODULE_COMPONENT_421_REFERENCE = 'module-component-421';
    public const MODULE_COMPONENT_422_REFERENCE = 'module-component-422';
    public const MODULE_COMPONENT_423_REFERENCE = 'module-component-423';
    public const MODULE_COMPONENT_424_REFERENCE = 'module-component-424';
    public const MODULE_COMPONENT_425_REFERENCE = 'module-component-425';
    public const MODULE_COMPONENT_426_REFERENCE = 'module-component-426';
    public const MODULE_COMPONENT_427_REFERENCE = 'module-component-427';
    public const MODULE_COMPONENT_428_REFERENCE = 'module-component-428';
    public const MODULE_COMPONENT_429_REFERENCE = 'module-component-429';
    public const MODULE_COMPONENT_430_REFERENCE = 'module-component-430';
    public const MODULE_COMPONENT_431_REFERENCE = 'module-component-431';
    public const MODULE_COMPONENT_432_REFERENCE = 'module-component-432';
    public const MODULE_COMPONENT_433_REFERENCE = 'module-component-433';
    public const MODULE_COMPONENT_434_REFERENCE = 'module-component-434';
    public const MODULE_COMPONENT_435_REFERENCE = 'module-component-435';
    public const MODULE_COMPONENT_436_REFERENCE = 'module-component-436';
    public const MODULE_COMPONENT_437_REFERENCE = 'module-component-437';
    public const MODULE_COMPONENT_438_REFERENCE = 'module-component-438';
    public const MODULE_COMPONENT_439_REFERENCE = 'module-component-439';
    public const MODULE_COMPONENT_440_REFERENCE = 'module-component-440';
    public const MODULE_COMPONENT_441_REFERENCE = 'module-component-441';
    public const MODULE_COMPONENT_442_REFERENCE = 'module-component-442';
    public const MODULE_COMPONENT_443_REFERENCE = 'module-component-443';
    public const MODULE_COMPONENT_444_REFERENCE = 'module-component-444';
    public const MODULE_COMPONENT_445_REFERENCE = 'module-component-445';
    public const MODULE_COMPONENT_446_REFERENCE = 'module-component-446';
    public const MODULE_COMPONENT_447_REFERENCE = 'module-component-447';
    public const MODULE_COMPONENT_448_REFERENCE = 'module-component-448';
    public const MODULE_COMPONENT_449_REFERENCE = 'module-component-449';
    public const MODULE_COMPONENT_450_REFERENCE = 'module-component-450';
    public const MODULE_COMPONENT_451_REFERENCE = 'module-component-451';
    public const MODULE_COMPONENT_452_REFERENCE = 'module-component-452';
    public const MODULE_COMPONENT_453_REFERENCE = 'module-component-453';
    public const MODULE_COMPONENT_454_REFERENCE = 'module-component-454';
    public const MODULE_COMPONENT_455_REFERENCE = 'module-component-455';
    public const MODULE_COMPONENT_456_REFERENCE = 'module-component-456';
    public const MODULE_COMPONENT_457_REFERENCE = 'module-component-457';
    public const MODULE_COMPONENT_458_REFERENCE = 'module-component-458';
    public const MODULE_COMPONENT_459_REFERENCE = 'module-component-459';
    public const MODULE_COMPONENT_460_REFERENCE = 'module-component-460';
    public const MODULE_COMPONENT_461_REFERENCE = 'module-component-461';
    public const MODULE_COMPONENT_462_REFERENCE = 'module-component-462';
    public const MODULE_COMPONENT_463_REFERENCE = 'module-component-463';
    public const MODULE_COMPONENT_464_REFERENCE = 'module-component-464';
    public const MODULE_COMPONENT_465_REFERENCE = 'module-component-465';
    public const MODULE_COMPONENT_466_REFERENCE = 'module-component-466';
    public const MODULE_COMPONENT_467_REFERENCE = 'module-component-467';
    public const MODULE_COMPONENT_468_REFERENCE = 'module-component-468';
    public const MODULE_COMPONENT_469_REFERENCE = 'module-component-469';
    public const MODULE_COMPONENT_470_REFERENCE = 'module-component-470';
    public const MODULE_COMPONENT_471_REFERENCE = 'module-component-471';
    public const MODULE_COMPONENT_472_REFERENCE = 'module-component-472';
    public const MODULE_COMPONENT_473_REFERENCE = 'module-component-473';
    public const MODULE_COMPONENT_474_REFERENCE = 'module-component-474';
    public const MODULE_COMPONENT_475_REFERENCE = 'module-component-475';
    public const MODULE_COMPONENT_476_REFERENCE = 'module-component-476';
    public const MODULE_COMPONENT_477_REFERENCE = 'module-component-477';
    public const MODULE_COMPONENT_478_REFERENCE = 'module-component-478';
    public const MODULE_COMPONENT_479_REFERENCE = 'module-component-479';
    public const MODULE_COMPONENT_480_REFERENCE = 'module-component-480';
    public const MODULE_COMPONENT_481_REFERENCE = 'module-component-481';
    public const MODULE_COMPONENT_482_REFERENCE = 'module-component-482';
    public const MODULE_COMPONENT_483_REFERENCE = 'module-component-483';
    public const MODULE_COMPONENT_484_REFERENCE = 'module-component-484';
    public const MODULE_COMPONENT_485_REFERENCE = 'module-component-485';
    public const MODULE_COMPONENT_486_REFERENCE = 'module-component-486';
    public const MODULE_COMPONENT_487_REFERENCE = 'module-component-487';
    public const MODULE_COMPONENT_488_REFERENCE = 'module-component-488';
    public const MODULE_COMPONENT_489_REFERENCE = 'module-component-489';
    public const MODULE_COMPONENT_490_REFERENCE = 'module-component-490';
    public const MODULE_COMPONENT_491_REFERENCE = 'module-component-491';
    public const MODULE_COMPONENT_492_REFERENCE = 'module-component-492';
    public const MODULE_COMPONENT_493_REFERENCE = 'module-component-493';
    public const MODULE_COMPONENT_494_REFERENCE = 'module-component-494';
    public const MODULE_COMPONENT_495_REFERENCE = 'module-component-495';
    public const MODULE_COMPONENT_496_REFERENCE = 'module-component-496';
    public const MODULE_COMPONENT_497_REFERENCE = 'module-component-497';
    public const MODULE_COMPONENT_498_REFERENCE = 'module-component-498';
    public const MODULE_COMPONENT_499_REFERENCE = 'module-component-499';
    public const MODULE_COMPONENT_500_REFERENCE = 'module-component-500';
    public const MODULE_COMPONENT_501_REFERENCE = 'module-component-501';
    public const MODULE_COMPONENT_502_REFERENCE = 'module-component-502';
    public const MODULE_COMPONENT_503_REFERENCE = 'module-component-503';
    public const MODULE_COMPONENT_504_REFERENCE = 'module-component-504';
    public const MODULE_COMPONENT_505_REFERENCE = 'module-component-505';
    public const MODULE_COMPONENT_506_REFERENCE = 'module-component-506';
    public const MODULE_COMPONENT_507_REFERENCE = 'module-component-507';
    public const MODULE_COMPONENT_508_REFERENCE = 'module-component-508';
    public const MODULE_COMPONENT_509_REFERENCE = 'module-component-509';
    public const MODULE_COMPONENT_510_REFERENCE = 'module-component-510';
    public const MODULE_COMPONENT_511_REFERENCE = 'module-component-511';
    public const MODULE_COMPONENT_512_REFERENCE = 'module-component-512';
    public const MODULE_COMPONENT_513_REFERENCE = 'module-component-513';
    public const MODULE_COMPONENT_514_REFERENCE = 'module-component-514';
    public const MODULE_COMPONENT_515_REFERENCE = 'module-component-515';
    public const MODULE_COMPONENT_516_REFERENCE = 'module-component-516';
    public const MODULE_COMPONENT_517_REFERENCE = 'module-component-517';
    public const MODULE_COMPONENT_518_REFERENCE = 'module-component-518';
    public const MODULE_COMPONENT_519_REFERENCE = 'module-component-519';
    public const MODULE_COMPONENT_520_REFERENCE = 'module-component-520';
    public const MODULE_COMPONENT_521_REFERENCE = 'module-component-521';
    public const MODULE_COMPONENT_522_REFERENCE = 'module-component-522';
    public const MODULE_COMPONENT_523_REFERENCE = 'module-component-523';
    public const MODULE_COMPONENT_524_REFERENCE = 'module-component-524';
    public const MODULE_COMPONENT_525_REFERENCE = 'module-component-525';
    public const MODULE_COMPONENT_526_REFERENCE = 'module-component-526';
    public const MODULE_COMPONENT_527_REFERENCE = 'module-component-527';
    public const MODULE_COMPONENT_528_REFERENCE = 'module-component-528';
    public const MODULE_COMPONENT_529_REFERENCE = 'module-component-529';
    public const MODULE_COMPONENT_530_REFERENCE = 'module-component-530';
    public const MODULE_COMPONENT_531_REFERENCE = 'module-component-531';
    public const MODULE_COMPONENT_532_REFERENCE = 'module-component-532';
    public const MODULE_COMPONENT_533_REFERENCE = 'module-component-533';
    public const MODULE_COMPONENT_534_REFERENCE = 'module-component-534';
    public const MODULE_COMPONENT_535_REFERENCE = 'module-component-535';
    public const MODULE_COMPONENT_536_REFERENCE = 'module-component-536';
    public const MODULE_COMPONENT_537_REFERENCE = 'module-component-537';
    public const MODULE_COMPONENT_538_REFERENCE = 'module-component-538';
    public const MODULE_COMPONENT_539_REFERENCE = 'module-component-539';
    public const MODULE_COMPONENT_540_REFERENCE = 'module-component-540';
    public const MODULE_COMPONENT_541_REFERENCE = 'module-component-541';
    public const MODULE_COMPONENT_542_REFERENCE = 'module-component-542';
    public const MODULE_COMPONENT_543_REFERENCE = 'module-component-543';
    public const MODULE_COMPONENT_544_REFERENCE = 'module-component-544';
    public const MODULE_COMPONENT_545_REFERENCE = 'module-component-545';
    public const MODULE_COMPONENT_546_REFERENCE = 'module-component-546';
    public const MODULE_COMPONENT_547_REFERENCE = 'module-component-547';
    public const MODULE_COMPONENT_548_REFERENCE = 'module-component-548';
    public const MODULE_COMPONENT_549_REFERENCE = 'module-component-549';
    public const MODULE_COMPONENT_550_REFERENCE = 'module-component-550';
    public const MODULE_COMPONENT_551_REFERENCE = 'module-component-551';
    public const MODULE_COMPONENT_552_REFERENCE = 'module-component-552';
    public const MODULE_COMPONENT_553_REFERENCE = 'module-component-553';
    public const MODULE_COMPONENT_554_REFERENCE = 'module-component-554';
    public const MODULE_COMPONENT_555_REFERENCE = 'module-component-555';
    public const MODULE_COMPONENT_556_REFERENCE = 'module-component-556';
    public const MODULE_COMPONENT_557_REFERENCE = 'module-component-557';
    public const MODULE_COMPONENT_558_REFERENCE = 'module-component-558';
    public const MODULE_COMPONENT_559_REFERENCE = 'module-component-559';
    public const MODULE_COMPONENT_560_REFERENCE = 'module-component-560';
    public const MODULE_COMPONENT_561_REFERENCE = 'module-component-561';
    public const MODULE_COMPONENT_562_REFERENCE = 'module-component-562';
    public const MODULE_COMPONENT_563_REFERENCE = 'module-component-563';
    public const MODULE_COMPONENT_564_REFERENCE = 'module-component-564';
    public const MODULE_COMPONENT_565_REFERENCE = 'module-component-565';
    public const MODULE_COMPONENT_566_REFERENCE = 'module-component-566';
    public const MODULE_COMPONENT_567_REFERENCE = 'module-component-567';
    public const MODULE_COMPONENT_568_REFERENCE = 'module-component-568';
    public const MODULE_COMPONENT_569_REFERENCE = 'module-component-569';
    public const MODULE_COMPONENT_570_REFERENCE = 'module-component-570';
    public const MODULE_COMPONENT_571_REFERENCE = 'module-component-571';
    public const MODULE_COMPONENT_572_REFERENCE = 'module-component-572';
    public const MODULE_COMPONENT_573_REFERENCE = 'module-component-573';
    public const MODULE_COMPONENT_574_REFERENCE = 'module-component-574';
    public const MODULE_COMPONENT_575_REFERENCE = 'module-component-575';
    public const MODULE_COMPONENT_576_REFERENCE = 'module-component-576';
    public const MODULE_COMPONENT_577_REFERENCE = 'module-component-577';
    public const MODULE_COMPONENT_578_REFERENCE = 'module-component-578';
    public const MODULE_COMPONENT_579_REFERENCE = 'module-component-579';
    public const MODULE_COMPONENT_580_REFERENCE = 'module-component-580';
    public const MODULE_COMPONENT_581_REFERENCE = 'module-component-581';
    public const MODULE_COMPONENT_582_REFERENCE = 'module-component-582';
    public const MODULE_COMPONENT_583_REFERENCE = 'module-component-583';
    public const MODULE_COMPONENT_584_REFERENCE = 'module-component-584';
    public const MODULE_COMPONENT_585_REFERENCE = 'module-component-585';
    public const MODULE_COMPONENT_586_REFERENCE = 'module-component-586';
    public const MODULE_COMPONENT_587_REFERENCE = 'module-component-587';
    public const MODULE_COMPONENT_588_REFERENCE = 'module-component-588';
    public const MODULE_COMPONENT_589_REFERENCE = 'module-component-589';
    public const MODULE_COMPONENT_590_REFERENCE = 'module-component-590';
    public const MODULE_COMPONENT_591_REFERENCE = 'module-component-591';
    public const MODULE_COMPONENT_592_REFERENCE = 'module-component-592';
    public const MODULE_COMPONENT_593_REFERENCE = 'module-component-593';
    public const MODULE_COMPONENT_594_REFERENCE = 'module-component-594';
    public const MODULE_COMPONENT_595_REFERENCE = 'module-component-595';
    public const MODULE_COMPONENT_596_REFERENCE = 'module-component-596';
    public const MODULE_COMPONENT_597_REFERENCE = 'module-component-597';
    public const MODULE_COMPONENT_598_REFERENCE = 'module-component-598';
    public const MODULE_COMPONENT_599_REFERENCE = 'module-component-599';
    public const MODULE_COMPONENT_600_REFERENCE = 'module-component-600';
    public const MODULE_COMPONENT_601_REFERENCE = 'module-component-601';
    public const MODULE_COMPONENT_602_REFERENCE = 'module-component-602';
    public const MODULE_COMPONENT_603_REFERENCE = 'module-component-603';
    public const MODULE_COMPONENT_604_REFERENCE = 'module-component-604';
    public const MODULE_COMPONENT_605_REFERENCE = 'module-component-605';
    public const MODULE_COMPONENT_606_REFERENCE = 'module-component-606';
    public const MODULE_COMPONENT_607_REFERENCE = 'module-component-607';
    public const MODULE_COMPONENT_608_REFERENCE = 'module-component-608';
    public const MODULE_COMPONENT_609_REFERENCE = 'module-component-609';
    public const MODULE_COMPONENT_610_REFERENCE = 'module-component-610';
    public const MODULE_COMPONENT_611_REFERENCE = 'module-component-611';
    public const MODULE_COMPONENT_612_REFERENCE = 'module-component-612';
    public const MODULE_COMPONENT_613_REFERENCE = 'module-component-613';
    public const MODULE_COMPONENT_614_REFERENCE = 'module-component-614';
    public const MODULE_COMPONENT_615_REFERENCE = 'module-component-615';
    public const MODULE_COMPONENT_616_REFERENCE = 'module-component-616';
    public const MODULE_COMPONENT_617_REFERENCE = 'module-component-617';
    public const MODULE_COMPONENT_618_REFERENCE = 'module-component-618';
    public const MODULE_COMPONENT_619_REFERENCE = 'module-component-619';
    public const MODULE_COMPONENT_620_REFERENCE = 'module-component-620';
    public const MODULE_COMPONENT_621_REFERENCE = 'module-component-621';
    public const MODULE_COMPONENT_622_REFERENCE = 'module-component-622';
    public const MODULE_COMPONENT_623_REFERENCE = 'module-component-623';
    public const MODULE_COMPONENT_624_REFERENCE = 'module-component-624';
    public const MODULE_COMPONENT_625_REFERENCE = 'module-component-625';
    public const MODULE_COMPONENT_626_REFERENCE = 'module-component-626';
    public const MODULE_COMPONENT_627_REFERENCE = 'module-component-627';
    public const MODULE_COMPONENT_628_REFERENCE = 'module-component-628';
    public const MODULE_COMPONENT_629_REFERENCE = 'module-component-629';
    public const MODULE_COMPONENT_630_REFERENCE = 'module-component-630';
    public const MODULE_COMPONENT_631_REFERENCE = 'module-component-631';
    public const MODULE_COMPONENT_632_REFERENCE = 'module-component-632';
    public const MODULE_COMPONENT_633_REFERENCE = 'module-component-633';
    public const MODULE_COMPONENT_634_REFERENCE = 'module-component-634';
    public const MODULE_COMPONENT_635_REFERENCE = 'module-component-635';
    public const MODULE_COMPONENT_636_REFERENCE = 'module-component-636';
    public const MODULE_COMPONENT_637_REFERENCE = 'module-component-637';
    public const MODULE_COMPONENT_638_REFERENCE = 'module-component-638';
    public const MODULE_COMPONENT_639_REFERENCE = 'module-component-639';
    public const MODULE_COMPONENT_640_REFERENCE = 'module-component-640';
    public const MODULE_COMPONENT_641_REFERENCE = 'module-component-641';
    public const MODULE_COMPONENT_642_REFERENCE = 'module-component-642';
    public const MODULE_COMPONENT_643_REFERENCE = 'module-component-643';
    public const MODULE_COMPONENT_644_REFERENCE = 'module-component-644';
    public const MODULE_COMPONENT_645_REFERENCE = 'module-component-645';
    public const MODULE_COMPONENT_646_REFERENCE = 'module-component-646';
    public const MODULE_COMPONENT_647_REFERENCE = 'module-component-647';
    public const MODULE_COMPONENT_648_REFERENCE = 'module-component-648';
    public const MODULE_COMPONENT_649_REFERENCE = 'module-component-649';
    public const MODULE_COMPONENT_650_REFERENCE = 'module-component-650';
    public const MODULE_COMPONENT_651_REFERENCE = 'module-component-651';
    public const MODULE_COMPONENT_652_REFERENCE = 'module-component-652';
    public const MODULE_COMPONENT_653_REFERENCE = 'module-component-653';
    public const MODULE_COMPONENT_654_REFERENCE = 'module-component-654';
    public const MODULE_COMPONENT_655_REFERENCE = 'module-component-655';
    public const MODULE_COMPONENT_656_REFERENCE = 'module-component-656';
    public const MODULE_COMPONENT_657_REFERENCE = 'module-component-657';
    public const MODULE_COMPONENT_658_REFERENCE = 'module-component-658';
    public const MODULE_COMPONENT_659_REFERENCE = 'module-component-659';
    public const MODULE_COMPONENT_660_REFERENCE = 'module-component-660';
    public const MODULE_COMPONENT_661_REFERENCE = 'module-component-661';
    public const MODULE_COMPONENT_662_REFERENCE = 'module-component-662';
    public const MODULE_COMPONENT_663_REFERENCE = 'module-component-663';
    public const MODULE_COMPONENT_664_REFERENCE = 'module-component-664';
    public const MODULE_COMPONENT_665_REFERENCE = 'module-component-665';
    public const MODULE_COMPONENT_666_REFERENCE = 'module-component-666';
    public const MODULE_COMPONENT_667_REFERENCE = 'module-component-667';
    public const MODULE_COMPONENT_668_REFERENCE = 'module-component-668';
    public const MODULE_COMPONENT_669_REFERENCE = 'module-component-669';
    public const MODULE_COMPONENT_670_REFERENCE = 'module-component-670';
    public const MODULE_COMPONENT_671_REFERENCE = 'module-component-671';
    public const MODULE_COMPONENT_672_REFERENCE = 'module-component-672';
    public const MODULE_COMPONENT_673_REFERENCE = 'module-component-673';
    public const MODULE_COMPONENT_674_REFERENCE = 'module-component-674';
    public const MODULE_COMPONENT_675_REFERENCE = 'module-component-675';
    public const MODULE_COMPONENT_676_REFERENCE = 'module-component-676';
    public const MODULE_COMPONENT_677_REFERENCE = 'module-component-677';
    public const MODULE_COMPONENT_678_REFERENCE = 'module-component-678';
    public const MODULE_COMPONENT_679_REFERENCE = 'module-component-679';
    public const MODULE_COMPONENT_680_REFERENCE = 'module-component-680';
    public const MODULE_COMPONENT_681_REFERENCE = 'module-component-681';
    public const MODULE_COMPONENT_682_REFERENCE = 'module-component-682';
    public const MODULE_COMPONENT_683_REFERENCE = 'module-component-683';
    public const MODULE_COMPONENT_684_REFERENCE = 'module-component-684';
    public const MODULE_COMPONENT_685_REFERENCE = 'module-component-685';
    public const MODULE_COMPONENT_686_REFERENCE = 'module-component-686';
    public const MODULE_COMPONENT_687_REFERENCE = 'module-component-687';
    public const MODULE_COMPONENT_688_REFERENCE = 'module-component-688';
    public const MODULE_COMPONENT_689_REFERENCE = 'module-component-689';
    public const MODULE_COMPONENT_690_REFERENCE = 'module-component-690';
    public const MODULE_COMPONENT_691_REFERENCE = 'module-component-691';
    public const MODULE_COMPONENT_692_REFERENCE = 'module-component-692';
    public const MODULE_COMPONENT_693_REFERENCE = 'module-component-693';
    public const MODULE_COMPONENT_694_REFERENCE = 'module-component-694';
    public const MODULE_COMPONENT_695_REFERENCE = 'module-component-695';
    public const MODULE_COMPONENT_696_REFERENCE = 'module-component-696';
    public const MODULE_COMPONENT_697_REFERENCE = 'module-component-697';
    public const MODULE_COMPONENT_698_REFERENCE = 'module-component-698';
    public const MODULE_COMPONENT_699_REFERENCE = 'module-component-699';
    public const MODULE_COMPONENT_700_REFERENCE = 'module-component-700';
    public const MODULE_COMPONENT_701_REFERENCE = 'module-component-701';
    public const MODULE_COMPONENT_702_REFERENCE = 'module-component-702';
    public const MODULE_COMPONENT_703_REFERENCE = 'module-component-703';
    public const MODULE_COMPONENT_704_REFERENCE = 'module-component-704';
    public const MODULE_COMPONENT_705_REFERENCE = 'module-component-705';
    public const MODULE_COMPONENT_706_REFERENCE = 'module-component-706';
    public const MODULE_COMPONENT_707_REFERENCE = 'module-component-707';
    public const MODULE_COMPONENT_708_REFERENCE = 'module-component-708';
    public const MODULE_COMPONENT_709_REFERENCE = 'module-component-709';
    public const MODULE_COMPONENT_710_REFERENCE = 'module-component-710';
    public const MODULE_COMPONENT_711_REFERENCE = 'module-component-711';
    public const MODULE_COMPONENT_712_REFERENCE = 'module-component-712';
    public const MODULE_COMPONENT_713_REFERENCE = 'module-component-713';
    public const MODULE_COMPONENT_714_REFERENCE = 'module-component-714';
    public const MODULE_COMPONENT_715_REFERENCE = 'module-component-715';
    public const MODULE_COMPONENT_716_REFERENCE = 'module-component-716';
    public const MODULE_COMPONENT_717_REFERENCE = 'module-component-717';
    public const MODULE_COMPONENT_718_REFERENCE = 'module-component-718';
    public const MODULE_COMPONENT_719_REFERENCE = 'module-component-719';
    public const MODULE_COMPONENT_720_REFERENCE = 'module-component-720';
    public const MODULE_COMPONENT_721_REFERENCE = 'module-component-721';
    public const MODULE_COMPONENT_722_REFERENCE = 'module-component-722';
    public const MODULE_COMPONENT_723_REFERENCE = 'module-component-723';
    public const MODULE_COMPONENT_724_REFERENCE = 'module-component-724';
    public const MODULE_COMPONENT_725_REFERENCE = 'module-component-725';
    public const MODULE_COMPONENT_726_REFERENCE = 'module-component-726';
    public const MODULE_COMPONENT_727_REFERENCE = 'module-component-727';
    public const MODULE_COMPONENT_728_REFERENCE = 'module-component-728';
    public const MODULE_COMPONENT_729_REFERENCE = 'module-component-729';
    public const MODULE_COMPONENT_730_REFERENCE = 'module-component-730';
    public const MODULE_COMPONENT_731_REFERENCE = 'module-component-731';
    public const MODULE_COMPONENT_732_REFERENCE = 'module-component-732';
    public const MODULE_COMPONENT_733_REFERENCE = 'module-component-733';
    public const MODULE_COMPONENT_734_REFERENCE = 'module-component-734';
    public const MODULE_COMPONENT_735_REFERENCE = 'module-component-735';
    public const MODULE_COMPONENT_736_REFERENCE = 'module-component-736';
    public const MODULE_COMPONENT_737_REFERENCE = 'module-component-737';
    public const MODULE_COMPONENT_738_REFERENCE = 'module-component-738';
    public const MODULE_COMPONENT_739_REFERENCE = 'module-component-739';
    public const MODULE_COMPONENT_740_REFERENCE = 'module-component-740';
    public const MODULE_COMPONENT_741_REFERENCE = 'module-component-741';
    public const MODULE_COMPONENT_742_REFERENCE = 'module-component-742';
    public const MODULE_COMPONENT_743_REFERENCE = 'module-component-743';
    public const MODULE_COMPONENT_744_REFERENCE = 'module-component-744';
    public const MODULE_COMPONENT_745_REFERENCE = 'module-component-745';
    public const MODULE_COMPONENT_746_REFERENCE = 'module-component-746';
    public const MODULE_COMPONENT_747_REFERENCE = 'module-component-747';
    public const MODULE_COMPONENT_748_REFERENCE = 'module-component-748';
    public const MODULE_COMPONENT_749_REFERENCE = 'module-component-749';
    public const MODULE_COMPONENT_750_REFERENCE = 'module-component-750';
    public const MODULE_COMPONENT_751_REFERENCE = 'module-component-751';
    public const MODULE_COMPONENT_752_REFERENCE = 'module-component-752';
    public const MODULE_COMPONENT_753_REFERENCE = 'module-component-753';
    public const MODULE_COMPONENT_754_REFERENCE = 'module-component-754';
    public const MODULE_COMPONENT_755_REFERENCE = 'module-component-755';
    public const MODULE_COMPONENT_756_REFERENCE = 'module-component-756';
    public const MODULE_COMPONENT_757_REFERENCE = 'module-component-757';
    public const MODULE_COMPONENT_758_REFERENCE = 'module-component-758';
    public const MODULE_COMPONENT_759_REFERENCE = 'module-component-759';
    public const MODULE_COMPONENT_760_REFERENCE = 'module-component-760';
    public const MODULE_COMPONENT_761_REFERENCE = 'module-component-761';
    public const MODULE_COMPONENT_762_REFERENCE = 'module-component-762';
    public const MODULE_COMPONENT_763_REFERENCE = 'module-component-763';
    public const MODULE_COMPONENT_764_REFERENCE = 'module-component-764';
    public const MODULE_COMPONENT_765_REFERENCE = 'module-component-765';
    public const MODULE_COMPONENT_766_REFERENCE = 'module-component-766';
    public const MODULE_COMPONENT_767_REFERENCE = 'module-component-767';
    public const MODULE_COMPONENT_768_REFERENCE = 'module-component-768';
    public const MODULE_COMPONENT_769_REFERENCE = 'module-component-769';
    public const MODULE_COMPONENT_770_REFERENCE = 'module-component-770';
    public const MODULE_COMPONENT_771_REFERENCE = 'module-component-771';
    public const MODULE_COMPONENT_772_REFERENCE = 'module-component-772';
    public const MODULE_COMPONENT_773_REFERENCE = 'module-component-773';
    public const MODULE_COMPONENT_774_REFERENCE = 'module-component-774';
    public const MODULE_COMPONENT_775_REFERENCE = 'module-component-775';
    public const MODULE_COMPONENT_776_REFERENCE = 'module-component-776';
    public const MODULE_COMPONENT_777_REFERENCE = 'module-component-777';
    public const MODULE_COMPONENT_778_REFERENCE = 'module-component-778';
    public const MODULE_COMPONENT_779_REFERENCE = 'module-component-779';
    public const MODULE_COMPONENT_780_REFERENCE = 'module-component-780';
    public const MODULE_COMPONENT_781_REFERENCE = 'module-component-781';
    public const MODULE_COMPONENT_782_REFERENCE = 'module-component-782';
    public const MODULE_COMPONENT_783_REFERENCE = 'module-component-783';
    public const MODULE_COMPONENT_784_REFERENCE = 'module-component-784';
    public const MODULE_COMPONENT_785_REFERENCE = 'module-component-785';
    public const MODULE_COMPONENT_786_REFERENCE = 'module-component-786';
    public const MODULE_COMPONENT_787_REFERENCE = 'module-component-787';
    public const MODULE_COMPONENT_788_REFERENCE = 'module-component-788';
    public const MODULE_COMPONENT_789_REFERENCE = 'module-component-789';
    public const MODULE_COMPONENT_790_REFERENCE = 'module-component-790';
    public const MODULE_COMPONENT_791_REFERENCE = 'module-component-791';
    public const MODULE_COMPONENT_792_REFERENCE = 'module-component-792';
    public const MODULE_COMPONENT_793_REFERENCE = 'module-component-793';
    public const MODULE_COMPONENT_794_REFERENCE = 'module-component-794';
    public const MODULE_COMPONENT_795_REFERENCE = 'module-component-795';
    public const MODULE_COMPONENT_796_REFERENCE = 'module-component-796';
    public const MODULE_COMPONENT_797_REFERENCE = 'module-component-797';
    public const MODULE_COMPONENT_798_REFERENCE = 'module-component-798';
    public const MODULE_COMPONENT_799_REFERENCE = 'module-component-799';
    public const MODULE_COMPONENT_800_REFERENCE = 'module-component-800';
    public const MODULE_COMPONENT_801_REFERENCE = 'module-component-801';
    public const MODULE_COMPONENT_802_REFERENCE = 'module-component-802';
    public const MODULE_COMPONENT_803_REFERENCE = 'module-component-803';
    public const MODULE_COMPONENT_804_REFERENCE = 'module-component-804';
    public const MODULE_COMPONENT_805_REFERENCE = 'module-component-805';
    public const MODULE_COMPONENT_806_REFERENCE = 'module-component-806';
    public const MODULE_COMPONENT_807_REFERENCE = 'module-component-807';
    public const MODULE_COMPONENT_808_REFERENCE = 'module-component-808';
    public const MODULE_COMPONENT_809_REFERENCE = 'module-component-809';
    public const MODULE_COMPONENT_810_REFERENCE = 'module-component-810';
    public const MODULE_COMPONENT_811_REFERENCE = 'module-component-811';
    public const MODULE_COMPONENT_812_REFERENCE = 'module-component-812';
    public const MODULE_COMPONENT_813_REFERENCE = 'module-component-813';
    public const MODULE_COMPONENT_814_REFERENCE = 'module-component-814';
    public const MODULE_COMPONENT_815_REFERENCE = 'module-component-815';
    public const MODULE_COMPONENT_816_REFERENCE = 'module-component-816';
    public const MODULE_COMPONENT_817_REFERENCE = 'module-component-817';
    public const MODULE_COMPONENT_818_REFERENCE = 'module-component-818';
    public const MODULE_COMPONENT_819_REFERENCE = 'module-component-819';
    public const MODULE_COMPONENT_820_REFERENCE = 'module-component-820';
    public const MODULE_COMPONENT_821_REFERENCE = 'module-component-821';
    public const MODULE_COMPONENT_822_REFERENCE = 'module-component-822';
    public const MODULE_COMPONENT_823_REFERENCE = 'module-component-823';
    public const MODULE_COMPONENT_824_REFERENCE = 'module-component-824';
    public const MODULE_COMPONENT_825_REFERENCE = 'module-component-825';
    public const MODULE_COMPONENT_826_REFERENCE = 'module-component-826';
    public const MODULE_COMPONENT_827_REFERENCE = 'module-component-827';
    public const MODULE_COMPONENT_828_REFERENCE = 'module-component-828';
    public const MODULE_COMPONENT_829_REFERENCE = 'module-component-829';
    public const MODULE_COMPONENT_830_REFERENCE = 'module-component-830';
    public const MODULE_COMPONENT_831_REFERENCE = 'module-component-831';
    public const MODULE_COMPONENT_832_REFERENCE = 'module-component-832';
    public const MODULE_COMPONENT_833_REFERENCE = 'module-component-833';
    public const MODULE_COMPONENT_834_REFERENCE = 'module-component-834';
    public const MODULE_COMPONENT_835_REFERENCE = 'module-component-835';
    public const MODULE_COMPONENT_836_REFERENCE = 'module-component-836';
    public const MODULE_COMPONENT_837_REFERENCE = 'module-component-837';
    public const MODULE_COMPONENT_838_REFERENCE = 'module-component-838';
    public const MODULE_COMPONENT_839_REFERENCE = 'module-component-839';
    public const MODULE_COMPONENT_840_REFERENCE = 'module-component-840';
    public const MODULE_COMPONENT_841_REFERENCE = 'module-component-841';
    public const MODULE_COMPONENT_842_REFERENCE = 'module-component-842';
    public const MODULE_COMPONENT_843_REFERENCE = 'module-component-843';
    public const MODULE_COMPONENT_844_REFERENCE = 'module-component-844';
    public const MODULE_COMPONENT_845_REFERENCE = 'module-component-845';
    public const MODULE_COMPONENT_846_REFERENCE = 'module-component-846';
    public const MODULE_COMPONENT_847_REFERENCE = 'module-component-847';
    public const MODULE_COMPONENT_848_REFERENCE = 'module-component-848';
    public const MODULE_COMPONENT_849_REFERENCE = 'module-component-849';
    public const MODULE_COMPONENT_850_REFERENCE = 'module-component-850';
    public const MODULE_COMPONENT_851_REFERENCE = 'module-component-851';
    public const MODULE_COMPONENT_852_REFERENCE = 'module-component-852';
    public const MODULE_COMPONENT_853_REFERENCE = 'module-component-853';
    public const MODULE_COMPONENT_854_REFERENCE = 'module-component-854';
    public const MODULE_COMPONENT_855_REFERENCE = 'module-component-855';
    public const MODULE_COMPONENT_856_REFERENCE = 'module-component-856';
    public const MODULE_COMPONENT_857_REFERENCE = 'module-component-857';
    public const MODULE_COMPONENT_858_REFERENCE = 'module-component-858';
    public const MODULE_COMPONENT_859_REFERENCE = 'module-component-859';
    public const MODULE_COMPONENT_860_REFERENCE = 'module-component-860';
    public const MODULE_COMPONENT_861_REFERENCE = 'module-component-861';
    public const MODULE_COMPONENT_862_REFERENCE = 'module-component-862';
    public const MODULE_COMPONENT_863_REFERENCE = 'module-component-863';
    public const MODULE_COMPONENT_864_REFERENCE = 'module-component-864';
    public const MODULE_COMPONENT_865_REFERENCE = 'module-component-865';
    public const MODULE_COMPONENT_866_REFERENCE = 'module-component-866';
    public const MODULE_COMPONENT_867_REFERENCE = 'module-component-867';
    public const MODULE_COMPONENT_868_REFERENCE = 'module-component-868';
    public const MODULE_COMPONENT_869_REFERENCE = 'module-component-869';
    public const MODULE_COMPONENT_870_REFERENCE = 'module-component-870';
    public const MODULE_COMPONENT_871_REFERENCE = 'module-component-871';
    public const MODULE_COMPONENT_872_REFERENCE = 'module-component-872';
    public const MODULE_COMPONENT_873_REFERENCE = 'module-component-873';
    public const MODULE_COMPONENT_874_REFERENCE = 'module-component-874';
    public const MODULE_COMPONENT_875_REFERENCE = 'module-component-875';
    public const MODULE_COMPONENT_876_REFERENCE = 'module-component-876';
    public const MODULE_COMPONENT_877_REFERENCE = 'module-component-877';
    public const MODULE_COMPONENT_878_REFERENCE = 'module-component-878';
    public const MODULE_COMPONENT_879_REFERENCE = 'module-component-879';
    public const MODULE_COMPONENT_880_REFERENCE = 'module-component-880';
    public const MODULE_COMPONENT_881_REFERENCE = 'module-component-881';
    public const MODULE_COMPONENT_882_REFERENCE = 'module-component-882';
    public const MODULE_COMPONENT_883_REFERENCE = 'module-component-883';
    public const MODULE_COMPONENT_884_REFERENCE = 'module-component-884';
    public const MODULE_COMPONENT_885_REFERENCE = 'module-component-885';
    public const MODULE_COMPONENT_886_REFERENCE = 'module-component-886';
    public const MODULE_COMPONENT_887_REFERENCE = 'module-component-887';
    public const MODULE_COMPONENT_888_REFERENCE = 'module-component-888';
    public const MODULE_COMPONENT_889_REFERENCE = 'module-component-889';
    public const MODULE_COMPONENT_890_REFERENCE = 'module-component-890';
    public const MODULE_COMPONENT_891_REFERENCE = 'module-component-891';
    public const MODULE_COMPONENT_892_REFERENCE = 'module-component-892';
    public const MODULE_COMPONENT_893_REFERENCE = 'module-component-893';
    public const MODULE_COMPONENT_894_REFERENCE = 'module-component-894';
    public const MODULE_COMPONENT_895_REFERENCE = 'module-component-895';
    public const MODULE_COMPONENT_896_REFERENCE = 'module-component-896';
    public const MODULE_COMPONENT_897_REFERENCE = 'module-component-897';
    public const MODULE_COMPONENT_898_REFERENCE = 'module-component-898';
    public const MODULE_COMPONENT_899_REFERENCE = 'module-component-899';
    public const MODULE_COMPONENT_900_REFERENCE = 'module-component-900';
    public const MODULE_COMPONENT_901_REFERENCE = 'module-component-901';
    public const MODULE_COMPONENT_902_REFERENCE = 'module-component-902';
    public const MODULE_COMPONENT_903_REFERENCE = 'module-component-903';
    public const MODULE_COMPONENT_904_REFERENCE = 'module-component-904';
    public const MODULE_COMPONENT_905_REFERENCE = 'module-component-905';
    public const MODULE_COMPONENT_906_REFERENCE = 'module-component-906';
    public const MODULE_COMPONENT_907_REFERENCE = 'module-component-907';
    public const MODULE_COMPONENT_908_REFERENCE = 'module-component-908';
    public const MODULE_COMPONENT_909_REFERENCE = 'module-component-909';
    public const MODULE_COMPONENT_910_REFERENCE = 'module-component-910';
    public const MODULE_COMPONENT_911_REFERENCE = 'module-component-911';
    public const MODULE_COMPONENT_912_REFERENCE = 'module-component-912';
    public const MODULE_COMPONENT_913_REFERENCE = 'module-component-913';
    public const MODULE_COMPONENT_914_REFERENCE = 'module-component-914';
    public const MODULE_COMPONENT_915_REFERENCE = 'module-component-915';
    public const MODULE_COMPONENT_916_REFERENCE = 'module-component-916';
    public const MODULE_COMPONENT_917_REFERENCE = 'module-component-917';
    public const MODULE_COMPONENT_918_REFERENCE = 'module-component-918';
    public const MODULE_COMPONENT_919_REFERENCE = 'module-component-919';
    public const MODULE_COMPONENT_920_REFERENCE = 'module-component-920';
    public const MODULE_COMPONENT_921_REFERENCE = 'module-component-921';
    public const MODULE_COMPONENT_922_REFERENCE = 'module-component-922';
    public const MODULE_COMPONENT_923_REFERENCE = 'module-component-923';
    public const MODULE_COMPONENT_924_REFERENCE = 'module-component-924';
    public const MODULE_COMPONENT_925_REFERENCE = 'module-component-925';
    public const MODULE_COMPONENT_926_REFERENCE = 'module-component-926';
    public const MODULE_COMPONENT_927_REFERENCE = 'module-component-927';
    public const MODULE_COMPONENT_928_REFERENCE = 'module-component-928';
    public const MODULE_COMPONENT_929_REFERENCE = 'module-component-929';
    public const MODULE_COMPONENT_930_REFERENCE = 'module-component-930';
    public const MODULE_COMPONENT_931_REFERENCE = 'module-component-931';
    public const MODULE_COMPONENT_932_REFERENCE = 'module-component-932';
    public const MODULE_COMPONENT_933_REFERENCE = 'module-component-933';
    public const MODULE_COMPONENT_934_REFERENCE = 'module-component-934';
    public const MODULE_COMPONENT_935_REFERENCE = 'module-component-935';
    public const MODULE_COMPONENT_936_REFERENCE = 'module-component-936';
    public const MODULE_COMPONENT_937_REFERENCE = 'module-component-937';
    public const MODULE_COMPONENT_938_REFERENCE = 'module-component-938';
    public const MODULE_COMPONENT_939_REFERENCE = 'module-component-939';
    public const MODULE_COMPONENT_940_REFERENCE = 'module-component-940';
    public const MODULE_COMPONENT_941_REFERENCE = 'module-component-941';
    public const MODULE_COMPONENT_942_REFERENCE = 'module-component-942';
    public const MODULE_COMPONENT_943_REFERENCE = 'module-component-943';
    public const MODULE_COMPONENT_944_REFERENCE = 'module-component-944';
    public const MODULE_COMPONENT_945_REFERENCE = 'module-component-945';
    public const MODULE_COMPONENT_946_REFERENCE = 'module-component-946';
    public const MODULE_COMPONENT_947_REFERENCE = 'module-component-947';
    public const MODULE_COMPONENT_948_REFERENCE = 'module-component-948';
    public const MODULE_COMPONENT_949_REFERENCE = 'module-component-949';
    public const MODULE_COMPONENT_950_REFERENCE = 'module-component-950';
    public const MODULE_COMPONENT_951_REFERENCE = 'module-component-951';
    public const MODULE_COMPONENT_952_REFERENCE = 'module-component-952';
    public const MODULE_COMPONENT_953_REFERENCE = 'module-component-953';
    public const MODULE_COMPONENT_954_REFERENCE = 'module-component-954';
    public const MODULE_COMPONENT_955_REFERENCE = 'module-component-955';
    public const MODULE_COMPONENT_956_REFERENCE = 'module-component-956';
    public const MODULE_COMPONENT_957_REFERENCE = 'module-component-957';
    public const MODULE_COMPONENT_958_REFERENCE = 'module-component-958';
    public const MODULE_COMPONENT_959_REFERENCE = 'module-component-959';
    public const MODULE_COMPONENT_960_REFERENCE = 'module-component-960';
    public const MODULE_COMPONENT_961_REFERENCE = 'module-component-961';
    public const MODULE_COMPONENT_962_REFERENCE = 'module-component-962';

    public function load(ObjectManager $manager)
    {

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_1_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_2_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_3_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_4_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_5_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_6_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_7_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_8_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_9_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_10_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_11_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_12_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_13_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_14_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_15_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_16_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_17_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_18_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_19_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_20_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_21_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_22_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_23_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_24_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_25_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_26_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_27_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_28_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_29_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_30_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_31_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_32_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_33_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_34_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_35_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_36_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_37_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_38_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_39_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_40_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_41_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_42_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_43_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_44_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_45_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_46_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_47_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_48_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_49_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_50_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_51_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_52_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_53_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_54_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_55_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_56_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_57_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_58_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_59_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_60_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_61_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_62_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_63_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_64_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_65_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_66_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_67_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_68_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_69_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_70_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_71_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_72_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_73_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_74_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_75_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_76_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_77_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_78_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_79_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_80_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_81_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_82_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_83_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_84_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_85_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_86_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_87_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_88_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_89_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_90_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_91_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_92_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_93_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_94_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_95_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_96_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_97_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_98_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_99_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_100_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_101_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_102_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_103_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_104_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_105_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_106_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_107_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_108_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_109_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_110_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_111_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_112_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_113_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_114_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_115_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_116_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_117_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_118_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_119_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_120_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_121_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_122_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_123_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_124_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_125_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_126_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_127_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_128_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_129_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_130_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_131_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_132_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_133_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_134_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_135_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_136_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_137_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_138_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_139_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_140_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_141_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_142_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_143_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_144_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_145_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_146_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_147_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_148_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_149_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_150_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_151_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_152_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_153_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_154_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_155_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_156_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_157_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_158_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_159_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_160_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_161_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_162_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_163_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_164_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_165_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_166_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_167_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_168_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_169_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_170_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_171_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_172_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_173_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_174_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_175_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_176_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_177_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_178_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_179_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_180_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_181_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_182_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_183_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_184_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_185_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_186_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_187_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_188_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_189_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_190_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_191_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_192_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_193_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_194_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_195_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_196_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_197_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_198_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_199_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_200_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_201_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_202_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_203_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_204_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_205_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_206_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_207_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_208_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_209_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_210_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_211_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_212_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_213_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_214_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_215_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_216_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_217_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_218_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_219_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_220_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_221_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_222_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_223_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_224_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_225_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_226_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_227_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_228_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_229_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_230_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_231_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_232_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_233_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_234_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_235_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_236_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_237_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_238_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_239_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_240_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_241_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_242_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_243_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_244_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_245_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_246_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_247_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_248_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_249_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_250_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_251_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_252_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_253_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_254_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_255_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_256_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_257_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_258_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_259_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_260_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_261_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_262_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_263_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_264_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_265_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_266_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_267_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_268_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_269_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_270_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_271_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_272_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_273_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_274_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_275_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_276_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_277_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_278_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_279_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_280_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_281_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_282_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_283_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_284_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_285_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_286_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_287_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_288_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_289_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_290_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_291_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_292_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_293_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_294_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_295_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_296_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_297_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_298_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_299_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_300_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_301_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_302_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_303_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_304_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_305_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_306_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_307_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_308_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_309_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_310_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_311_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_312_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_313_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_314_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_315_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_316_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_317_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_318_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_319_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_320_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_321_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_322_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_323_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_324_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_325_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_326_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_327_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_328_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_329_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_330_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_331_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_332_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_333_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_334_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_335_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_336_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_337_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_338_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_339_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_340_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_341_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_342_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_343_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_344_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_345_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_346_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_347_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_348_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_349_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_350_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_351_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_352_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_353_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_354_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_355_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_356_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_357_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_358_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_359_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_360_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_361_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_362_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_363_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_364_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_365_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_366_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_367_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_368_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_369_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_370_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_371_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_372_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_373_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_374_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_375_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_376_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_377_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_378_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_379_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_380_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_381_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_382_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_383_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_384_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_385_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_386_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_387_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_388_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_389_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_390_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_391_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_392_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_393_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_394_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_395_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_396_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_397_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_398_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_399_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_400_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_401_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_402_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_403_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_404_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_405_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_406_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_407_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_408_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_409_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_410_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_411_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_412_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_413_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_414_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_415_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_416_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_417_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_418_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_419_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_420_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_421_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_422_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_423_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_424_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_425_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_426_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_427_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_428_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_429_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_430_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_431_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_432_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_433_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_434_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_435_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_436_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_437_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_438_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_439_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_440_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_441_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_442_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_443_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_444_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_445_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_446_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_447_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_448_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_449_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_450_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_451_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_452_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_453_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_454_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_455_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_456_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_457_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_458_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_459_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_460_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_461_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_462_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_463_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_464_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_465_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_466_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_467_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_468_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_469_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_470_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_471_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_472_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_473_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_474_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_475_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_476_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_477_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_478_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_479_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_480_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_481_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_482_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_483_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_484_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_485_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_486_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_487_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_488_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_489_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_490_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_491_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_492_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_493_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_494_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_495_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_496_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_497_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_498_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_499_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_500_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_501_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_502_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_503_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_504_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_505_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_506_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_507_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_508_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_509_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_510_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_511_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_512_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_513_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_514_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_515_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_516_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_517_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_518_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_519_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_520_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_521_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_522_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_523_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_524_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_525_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_526_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_527_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_528_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_529_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_530_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_531_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_532_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_533_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_534_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_535_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_536_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_537_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_538_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_539_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_540_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_541_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_542_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_543_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_544_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_545_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_546_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_547_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_548_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_549_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_550_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_551_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_552_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_553_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_554_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_555_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_556_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_557_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_558_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_559_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_560_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_561_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_562_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_563_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_564_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_565_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_566_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_567_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_568_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_569_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_570_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_571_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_572_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_573_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_574_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_575_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_576_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_577_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_578_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_579_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_580_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_581_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_582_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_583_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_584_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_585_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_586_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_587_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_588_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_589_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_590_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_591_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_592_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_593_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_594_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_595_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_596_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_597_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_598_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_599_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_600_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_601_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_602_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_603_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_604_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_605_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_606_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_607_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_608_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_609_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_610_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_611_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_612_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_613_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_614_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_615_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_616_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_617_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_618_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_619_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_620_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_621_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_622_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_623_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_624_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_625_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_626_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_627_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_628_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_629_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_630_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_631_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_632_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_633_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_634_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_635_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_636_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_637_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_638_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_639_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_640_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_641_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_642_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_643_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_644_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_645_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_646_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_647_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_648_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_649_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_650_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_651_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_652_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_653_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_654_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_655_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_656_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_657_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_658_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_659_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_660_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_661_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_662_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_663_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_664_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_665_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_666_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_667_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_668_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_669_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_670_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_671_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_672_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_673_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_674_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_675_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_676_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_677_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_678_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_679_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_680_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_681_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_682_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_683_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_684_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_685_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_686_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_687_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_688_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_689_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_690_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_691_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_692_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_693_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_694_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_695_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_696_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_697_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_698_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_699_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_700_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_701_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_702_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_703_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_704_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_705_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_706_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_707_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_708_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_709_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_710_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_711_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_712_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_713_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_714_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_715_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_716_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_717_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_718_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_719_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_720_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_721_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_722_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_723_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_724_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_725_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_726_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_727_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_728_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_729_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_730_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_731_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_732_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_733_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_734_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_735_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_736_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_737_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_738_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_739_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_740_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_741_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_742_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_743_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_744_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_745_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_746_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_747_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_748_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_749_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_750_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_751_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_752_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_753_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_754_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_755_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_756_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_757_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_758_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_759_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_760_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_761_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_762_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_763_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_764_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_765_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_766_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_767_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_768_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_769_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_770_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_771_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_772_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_773_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_774_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_775_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_776_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_777_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_778_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_779_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_780_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_781_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_782_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_783_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_784_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_785_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_786_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_787_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_788_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_789_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_790_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_791_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_792_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_793_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_794_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_795_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_796_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_797_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_798_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_799_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_800_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_801_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_802_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_803_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_804_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_805_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_806_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_807_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_808_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_809_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_810_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_811_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_812_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_813_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_814_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_75_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_815_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_75_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_816_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_76_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_817_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_76_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_818_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_77_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_819_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_77_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_820_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_78_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_821_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_78_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_822_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_79_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_823_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_79_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_824_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_80_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_825_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_80_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_826_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_81_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_827_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_81_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_828_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_82_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_829_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_82_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_830_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_83_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_831_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_83_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_832_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_84_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_833_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_84_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_834_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_85_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_835_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_85_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_836_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_86_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_837_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_86_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_838_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_87_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_839_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_87_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_840_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_88_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_841_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_88_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_842_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_89_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_843_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_89_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_844_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_90_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_845_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_90_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_846_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_91_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_847_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_91_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_848_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_92_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_849_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_92_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_850_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_93_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_851_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_93_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_852_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_94_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_853_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_94_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_854_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_95_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_855_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_95_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_856_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_96_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_857_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_96_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_858_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_97_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_859_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_97_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_860_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_98_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_861_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_98_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_862_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_99_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_863_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_99_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_864_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_100_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_865_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_100_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_866_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_101_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_867_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_101_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_868_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_102_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_869_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_102_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_870_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_103_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_871_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_103_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_872_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_104_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_873_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_104_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_874_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_105_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_875_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_105_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_876_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_106_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_877_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_106_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_878_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_107_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_879_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_107_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_880_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_108_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_881_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_108_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_882_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_109_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_883_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_109_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_884_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_110_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_885_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_110_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_886_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_111_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_887_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_111_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_888_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_112_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_889_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_112_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_890_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_113_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_891_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_113_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_892_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_114_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_893_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_114_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_894_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_115_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_895_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_115_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_896_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_116_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_897_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_116_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_898_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_117_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_899_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_117_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_900_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_118_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_901_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_118_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_902_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_119_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_903_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_119_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_904_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_120_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_905_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_120_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_906_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_121_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_907_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_121_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_908_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_122_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_909_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_122_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_910_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_123_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_911_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_123_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_912_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_124_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_913_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_124_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_914_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_125_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_915_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_125_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_916_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_126_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_917_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_126_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_918_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_127_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_919_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_127_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_920_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_128_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_921_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_128_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_922_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_129_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_923_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_129_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_924_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_130_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_925_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_130_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_926_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_131_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_927_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_131_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_928_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_132_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_929_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_132_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_930_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_133_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_931_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_133_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_932_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_134_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_933_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_134_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_934_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_135_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_935_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_135_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_936_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_136_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_937_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_136_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_938_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_137_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_939_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_137_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_940_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_138_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_941_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_138_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_942_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_139_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_943_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_139_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_944_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_140_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_945_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_140_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_946_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_141_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_947_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_141_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_948_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_142_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_949_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_142_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_950_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_143_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_951_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_143_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_952_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_144_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_953_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_144_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_954_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_145_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_955_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_145_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_956_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_146_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_957_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_146_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_958_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_147_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_959_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_147_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_960_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_148_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_961_REFERENCE, $moduleComponent);

        $moduleComponent = new ModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setModule($this->getReference(ModuleFixtures::MODULE_MUR_INTERIEUR_148_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::MODULE_COMPONENT_962_REFERENCE, $moduleComponent);

        ////////////////////////////////
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ComponentFixtures::class,
            ModuleFixtures::class
        ];
    }
}
