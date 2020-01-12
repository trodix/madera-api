<?php

namespace App\DataFixtures;

use App\DataFixtures\ComponentFixtures;
use App\Entity\TemplateModuleComponent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\DataFixtures\TemplateModuleFixtures;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class TemplateModuleComponentFixtures extends Fixture implements DependentFixtureInterface
{

    public const TEMPLATE_MODULE_COMPONENT_1_REFERENCE = 'template-module-component-1';
    public const TEMPLATE_MODULE_COMPONENT_2_REFERENCE = 'template-module-component-2';
    public const TEMPLATE_MODULE_COMPONENT_3_REFERENCE = 'template-module-component-3';
    public const TEMPLATE_MODULE_COMPONENT_4_REFERENCE = 'template-module-component-4';
    public const TEMPLATE_MODULE_COMPONENT_5_REFERENCE = 'template-module-component-5';
    public const TEMPLATE_MODULE_COMPONENT_6_REFERENCE = 'template-module-component-6';
    public const TEMPLATE_MODULE_COMPONENT_7_REFERENCE = 'template-module-component-7';
    public const TEMPLATE_MODULE_COMPONENT_8_REFERENCE = 'template-module-component-8';
    public const TEMPLATE_MODULE_COMPONENT_9_REFERENCE = 'template-module-component-9';
    public const TEMPLATE_MODULE_COMPONENT_10_REFERENCE = 'template-module-component-10';
    public const TEMPLATE_MODULE_COMPONENT_11_REFERENCE = 'template-module-component-11';
    public const TEMPLATE_MODULE_COMPONENT_12_REFERENCE = 'template-module-component-12';
    public const TEMPLATE_MODULE_COMPONENT_13_REFERENCE = 'template-module-component-13';
    public const TEMPLATE_MODULE_COMPONENT_14_REFERENCE = 'template-module-component-14';
    public const TEMPLATE_MODULE_COMPONENT_15_REFERENCE = 'template-module-component-15';
    public const TEMPLATE_MODULE_COMPONENT_16_REFERENCE = 'template-module-component-16';
    public const TEMPLATE_MODULE_COMPONENT_17_REFERENCE = 'template-module-component-17';
    public const TEMPLATE_MODULE_COMPONENT_18_REFERENCE = 'template-module-component-18';
    public const TEMPLATE_MODULE_COMPONENT_19_REFERENCE = 'template-module-component-19';
    public const TEMPLATE_MODULE_COMPONENT_20_REFERENCE = 'template-module-component-20';
    public const TEMPLATE_MODULE_COMPONENT_21_REFERENCE = 'template-module-component-21';
    public const TEMPLATE_MODULE_COMPONENT_22_REFERENCE = 'template-module-component-22';
    public const TEMPLATE_MODULE_COMPONENT_23_REFERENCE = 'template-module-component-23';
    public const TEMPLATE_MODULE_COMPONENT_24_REFERENCE = 'template-module-component-24';
    public const TEMPLATE_MODULE_COMPONENT_25_REFERENCE = 'template-module-component-25';
    public const TEMPLATE_MODULE_COMPONENT_26_REFERENCE = 'template-module-component-26';
    public const TEMPLATE_MODULE_COMPONENT_27_REFERENCE = 'template-module-component-27';
    public const TEMPLATE_MODULE_COMPONENT_28_REFERENCE = 'template-module-component-28';
    public const TEMPLATE_MODULE_COMPONENT_29_REFERENCE = 'template-module-component-29';
    public const TEMPLATE_MODULE_COMPONENT_30_REFERENCE = 'template-module-component-30';
    public const TEMPLATE_MODULE_COMPONENT_31_REFERENCE = 'template-module-component-31';
    public const TEMPLATE_MODULE_COMPONENT_32_REFERENCE = 'template-module-component-32';
    public const TEMPLATE_MODULE_COMPONENT_33_REFERENCE = 'template-module-component-33';
    public const TEMPLATE_MODULE_COMPONENT_34_REFERENCE = 'template-module-component-34';
    public const TEMPLATE_MODULE_COMPONENT_35_REFERENCE = 'template-module-component-35';
    public const TEMPLATE_MODULE_COMPONENT_36_REFERENCE = 'template-module-component-36';
    public const TEMPLATE_MODULE_COMPONENT_37_REFERENCE = 'template-module-component-37';
    public const TEMPLATE_MODULE_COMPONENT_38_REFERENCE = 'template-module-component-38';
    public const TEMPLATE_MODULE_COMPONENT_39_REFERENCE = 'template-module-component-39';
    public const TEMPLATE_MODULE_COMPONENT_40_REFERENCE = 'template-module-component-40';
    public const TEMPLATE_MODULE_COMPONENT_41_REFERENCE = 'template-module-component-41';
    public const TEMPLATE_MODULE_COMPONENT_42_REFERENCE = 'template-module-component-42';
    public const TEMPLATE_MODULE_COMPONENT_43_REFERENCE = 'template-module-component-43';
    public const TEMPLATE_MODULE_COMPONENT_44_REFERENCE = 'template-module-component-44';
    public const TEMPLATE_MODULE_COMPONENT_45_REFERENCE = 'template-module-component-45';
    public const TEMPLATE_MODULE_COMPONENT_46_REFERENCE = 'template-module-component-46';
    public const TEMPLATE_MODULE_COMPONENT_47_REFERENCE = 'template-module-component-47';
    public const TEMPLATE_MODULE_COMPONENT_48_REFERENCE = 'template-module-component-48';
    public const TEMPLATE_MODULE_COMPONENT_49_REFERENCE = 'template-module-component-49';
    public const TEMPLATE_MODULE_COMPONENT_50_REFERENCE = 'template-module-component-50';
    public const TEMPLATE_MODULE_COMPONENT_51_REFERENCE = 'template-module-component-51';
    public const TEMPLATE_MODULE_COMPONENT_52_REFERENCE = 'template-module-component-52';
    public const TEMPLATE_MODULE_COMPONENT_53_REFERENCE = 'template-module-component-53';
    public const TEMPLATE_MODULE_COMPONENT_54_REFERENCE = 'template-module-component-54';
    public const TEMPLATE_MODULE_COMPONENT_55_REFERENCE = 'template-module-component-55';
    public const TEMPLATE_MODULE_COMPONENT_56_REFERENCE = 'template-module-component-56';
    public const TEMPLATE_MODULE_COMPONENT_57_REFERENCE = 'template-module-component-57';
    public const TEMPLATE_MODULE_COMPONENT_58_REFERENCE = 'template-module-component-58';
    public const TEMPLATE_MODULE_COMPONENT_59_REFERENCE = 'template-module-component-59';
    public const TEMPLATE_MODULE_COMPONENT_60_REFERENCE = 'template-module-component-60';
    public const TEMPLATE_MODULE_COMPONENT_61_REFERENCE = 'template-module-component-61';
    public const TEMPLATE_MODULE_COMPONENT_62_REFERENCE = 'template-module-component-62';
    public const TEMPLATE_MODULE_COMPONENT_63_REFERENCE = 'template-module-component-63';
    public const TEMPLATE_MODULE_COMPONENT_64_REFERENCE = 'template-module-component-64';
    public const TEMPLATE_MODULE_COMPONENT_65_REFERENCE = 'template-module-component-65';
    public const TEMPLATE_MODULE_COMPONENT_66_REFERENCE = 'template-module-component-66';
    public const TEMPLATE_MODULE_COMPONENT_67_REFERENCE = 'template-module-component-67';
    public const TEMPLATE_MODULE_COMPONENT_68_REFERENCE = 'template-module-component-68';
    public const TEMPLATE_MODULE_COMPONENT_69_REFERENCE = 'template-module-component-69';
    public const TEMPLATE_MODULE_COMPONENT_70_REFERENCE = 'template-module-component-70';
    public const TEMPLATE_MODULE_COMPONENT_71_REFERENCE = 'template-module-component-71';
    public const TEMPLATE_MODULE_COMPONENT_72_REFERENCE = 'template-module-component-72';
    public const TEMPLATE_MODULE_COMPONENT_73_REFERENCE = 'template-module-component-73';
    public const TEMPLATE_MODULE_COMPONENT_74_REFERENCE = 'template-module-component-74';
    public const TEMPLATE_MODULE_COMPONENT_75_REFERENCE = 'template-module-component-75';
    public const TEMPLATE_MODULE_COMPONENT_76_REFERENCE = 'template-module-component-76';
    public const TEMPLATE_MODULE_COMPONENT_77_REFERENCE = 'template-module-component-77';
    public const TEMPLATE_MODULE_COMPONENT_78_REFERENCE = 'template-module-component-78';
    public const TEMPLATE_MODULE_COMPONENT_79_REFERENCE = 'template-module-component-79';
    public const TEMPLATE_MODULE_COMPONENT_80_REFERENCE = 'template-module-component-80';
    public const TEMPLATE_MODULE_COMPONENT_81_REFERENCE = 'template-module-component-81';
    public const TEMPLATE_MODULE_COMPONENT_82_REFERENCE = 'template-module-component-82';
    public const TEMPLATE_MODULE_COMPONENT_83_REFERENCE = 'template-module-component-83';
    public const TEMPLATE_MODULE_COMPONENT_84_REFERENCE = 'template-module-component-84';
    public const TEMPLATE_MODULE_COMPONENT_85_REFERENCE = 'template-module-component-85';
    public const TEMPLATE_MODULE_COMPONENT_86_REFERENCE = 'template-module-component-86';
    public const TEMPLATE_MODULE_COMPONENT_87_REFERENCE = 'template-module-component-87';
    public const TEMPLATE_MODULE_COMPONENT_88_REFERENCE = 'template-module-component-88';
    public const TEMPLATE_MODULE_COMPONENT_89_REFERENCE = 'template-module-component-89';
    public const TEMPLATE_MODULE_COMPONENT_90_REFERENCE = 'template-module-component-90';
    public const TEMPLATE_MODULE_COMPONENT_91_REFERENCE = 'template-module-component-91';
    public const TEMPLATE_MODULE_COMPONENT_92_REFERENCE = 'template-module-component-92';
    public const TEMPLATE_MODULE_COMPONENT_93_REFERENCE = 'template-module-component-93';
    public const TEMPLATE_MODULE_COMPONENT_94_REFERENCE = 'template-module-component-94';
    public const TEMPLATE_MODULE_COMPONENT_95_REFERENCE = 'template-module-component-95';
    public const TEMPLATE_MODULE_COMPONENT_96_REFERENCE = 'template-module-component-96';
    public const TEMPLATE_MODULE_COMPONENT_97_REFERENCE = 'template-module-component-97';
    public const TEMPLATE_MODULE_COMPONENT_98_REFERENCE = 'template-module-component-98';
    public const TEMPLATE_MODULE_COMPONENT_99_REFERENCE = 'template-module-component-99';
    public const TEMPLATE_MODULE_COMPONENT_100_REFERENCE = 'template-module-component-100';
    public const TEMPLATE_MODULE_COMPONENT_101_REFERENCE = 'template-module-component-101';
    public const TEMPLATE_MODULE_COMPONENT_102_REFERENCE = 'template-module-component-102';
    public const TEMPLATE_MODULE_COMPONENT_103_REFERENCE = 'template-module-component-103';
    public const TEMPLATE_MODULE_COMPONENT_104_REFERENCE = 'template-module-component-104';
    public const TEMPLATE_MODULE_COMPONENT_105_REFERENCE = 'template-module-component-105';
    public const TEMPLATE_MODULE_COMPONENT_106_REFERENCE = 'template-module-component-106';
    public const TEMPLATE_MODULE_COMPONENT_107_REFERENCE = 'template-module-component-107';
    public const TEMPLATE_MODULE_COMPONENT_108_REFERENCE = 'template-module-component-108';
    public const TEMPLATE_MODULE_COMPONENT_109_REFERENCE = 'template-module-component-109';
    public const TEMPLATE_MODULE_COMPONENT_110_REFERENCE = 'template-module-component-110';
    public const TEMPLATE_MODULE_COMPONENT_111_REFERENCE = 'template-module-component-111';
    public const TEMPLATE_MODULE_COMPONENT_112_REFERENCE = 'template-module-component-112';
    public const TEMPLATE_MODULE_COMPONENT_113_REFERENCE = 'template-module-component-113';
    public const TEMPLATE_MODULE_COMPONENT_114_REFERENCE = 'template-module-component-114';
    public const TEMPLATE_MODULE_COMPONENT_115_REFERENCE = 'template-module-component-115';
    public const TEMPLATE_MODULE_COMPONENT_116_REFERENCE = 'template-module-component-116';
    public const TEMPLATE_MODULE_COMPONENT_117_REFERENCE = 'template-module-component-117';
    public const TEMPLATE_MODULE_COMPONENT_118_REFERENCE = 'template-module-component-118';
    public const TEMPLATE_MODULE_COMPONENT_119_REFERENCE = 'template-module-component-119';
    public const TEMPLATE_MODULE_COMPONENT_120_REFERENCE = 'template-module-component-120';
    public const TEMPLATE_MODULE_COMPONENT_121_REFERENCE = 'template-module-component-121';
    public const TEMPLATE_MODULE_COMPONENT_122_REFERENCE = 'template-module-component-122';
    public const TEMPLATE_MODULE_COMPONENT_123_REFERENCE = 'template-module-component-123';
    public const TEMPLATE_MODULE_COMPONENT_124_REFERENCE = 'template-module-component-124';
    public const TEMPLATE_MODULE_COMPONENT_125_REFERENCE = 'template-module-component-125';
    public const TEMPLATE_MODULE_COMPONENT_126_REFERENCE = 'template-module-component-126';
    public const TEMPLATE_MODULE_COMPONENT_127_REFERENCE = 'template-module-component-127';
    public const TEMPLATE_MODULE_COMPONENT_128_REFERENCE = 'template-module-component-128';
    public const TEMPLATE_MODULE_COMPONENT_129_REFERENCE = 'template-module-component-129';
    public const TEMPLATE_MODULE_COMPONENT_130_REFERENCE = 'template-module-component-130';
    public const TEMPLATE_MODULE_COMPONENT_131_REFERENCE = 'template-module-component-131';
    public const TEMPLATE_MODULE_COMPONENT_132_REFERENCE = 'template-module-component-132';
    public const TEMPLATE_MODULE_COMPONENT_133_REFERENCE = 'template-module-component-133';
    public const TEMPLATE_MODULE_COMPONENT_134_REFERENCE = 'template-module-component-134';
    public const TEMPLATE_MODULE_COMPONENT_135_REFERENCE = 'template-module-component-135';
    public const TEMPLATE_MODULE_COMPONENT_136_REFERENCE = 'template-module-component-136';
    public const TEMPLATE_MODULE_COMPONENT_137_REFERENCE = 'template-module-component-137';
    public const TEMPLATE_MODULE_COMPONENT_138_REFERENCE = 'template-module-component-138';
    public const TEMPLATE_MODULE_COMPONENT_139_REFERENCE = 'template-module-component-139';
    public const TEMPLATE_MODULE_COMPONENT_140_REFERENCE = 'template-module-component-140';
    public const TEMPLATE_MODULE_COMPONENT_141_REFERENCE = 'template-module-component-141';
    public const TEMPLATE_MODULE_COMPONENT_142_REFERENCE = 'template-module-component-142';
    public const TEMPLATE_MODULE_COMPONENT_143_REFERENCE = 'template-module-component-143';
    public const TEMPLATE_MODULE_COMPONENT_144_REFERENCE = 'template-module-component-144';
    public const TEMPLATE_MODULE_COMPONENT_145_REFERENCE = 'template-module-component-145';
    public const TEMPLATE_MODULE_COMPONENT_146_REFERENCE = 'template-module-component-146';
    public const TEMPLATE_MODULE_COMPONENT_147_REFERENCE = 'template-module-component-147';
    public const TEMPLATE_MODULE_COMPONENT_148_REFERENCE = 'template-module-component-148';
    public const TEMPLATE_MODULE_COMPONENT_149_REFERENCE = 'template-module-component-149';
    public const TEMPLATE_MODULE_COMPONENT_150_REFERENCE = 'template-module-component-150';
    public const TEMPLATE_MODULE_COMPONENT_151_REFERENCE = 'template-module-component-151';
    public const TEMPLATE_MODULE_COMPONENT_152_REFERENCE = 'template-module-component-152';
    public const TEMPLATE_MODULE_COMPONENT_153_REFERENCE = 'template-module-component-153';
    public const TEMPLATE_MODULE_COMPONENT_154_REFERENCE = 'template-module-component-154';
    public const TEMPLATE_MODULE_COMPONENT_155_REFERENCE = 'template-module-component-155';
    public const TEMPLATE_MODULE_COMPONENT_156_REFERENCE = 'template-module-component-156';
    public const TEMPLATE_MODULE_COMPONENT_157_REFERENCE = 'template-module-component-157';
    public const TEMPLATE_MODULE_COMPONENT_158_REFERENCE = 'template-module-component-158';
    public const TEMPLATE_MODULE_COMPONENT_159_REFERENCE = 'template-module-component-159';
    public const TEMPLATE_MODULE_COMPONENT_160_REFERENCE = 'template-module-component-160';
    public const TEMPLATE_MODULE_COMPONENT_161_REFERENCE = 'template-module-component-161';
    public const TEMPLATE_MODULE_COMPONENT_162_REFERENCE = 'template-module-component-162';
    public const TEMPLATE_MODULE_COMPONENT_163_REFERENCE = 'template-module-component-163';
    public const TEMPLATE_MODULE_COMPONENT_164_REFERENCE = 'template-module-component-164';
    public const TEMPLATE_MODULE_COMPONENT_165_REFERENCE = 'template-module-component-165';
    public const TEMPLATE_MODULE_COMPONENT_166_REFERENCE = 'template-module-component-166';
    public const TEMPLATE_MODULE_COMPONENT_167_REFERENCE = 'template-module-component-167';
    public const TEMPLATE_MODULE_COMPONENT_168_REFERENCE = 'template-module-component-168';
    public const TEMPLATE_MODULE_COMPONENT_169_REFERENCE = 'template-module-component-169';
    public const TEMPLATE_MODULE_COMPONENT_170_REFERENCE = 'template-module-component-170';
    public const TEMPLATE_MODULE_COMPONENT_171_REFERENCE = 'template-module-component-171';
    public const TEMPLATE_MODULE_COMPONENT_172_REFERENCE = 'template-module-component-172';
    public const TEMPLATE_MODULE_COMPONENT_173_REFERENCE = 'template-module-component-173';
    public const TEMPLATE_MODULE_COMPONENT_174_REFERENCE = 'template-module-component-174';
    public const TEMPLATE_MODULE_COMPONENT_175_REFERENCE = 'template-module-component-175';
    public const TEMPLATE_MODULE_COMPONENT_176_REFERENCE = 'template-module-component-176';
    public const TEMPLATE_MODULE_COMPONENT_177_REFERENCE = 'template-module-component-177';
    public const TEMPLATE_MODULE_COMPONENT_178_REFERENCE = 'template-module-component-178';
    public const TEMPLATE_MODULE_COMPONENT_179_REFERENCE = 'template-module-component-179';
    public const TEMPLATE_MODULE_COMPONENT_180_REFERENCE = 'template-module-component-180';
    public const TEMPLATE_MODULE_COMPONENT_181_REFERENCE = 'template-module-component-181';
    public const TEMPLATE_MODULE_COMPONENT_182_REFERENCE = 'template-module-component-182';
    public const TEMPLATE_MODULE_COMPONENT_183_REFERENCE = 'template-module-component-183';
    public const TEMPLATE_MODULE_COMPONENT_184_REFERENCE = 'template-module-component-184';
    public const TEMPLATE_MODULE_COMPONENT_185_REFERENCE = 'template-module-component-185';
    public const TEMPLATE_MODULE_COMPONENT_186_REFERENCE = 'template-module-component-186';
    public const TEMPLATE_MODULE_COMPONENT_187_REFERENCE = 'template-module-component-187';
    public const TEMPLATE_MODULE_COMPONENT_188_REFERENCE = 'template-module-component-188';
    public const TEMPLATE_MODULE_COMPONENT_189_REFERENCE = 'template-module-component-189';
    public const TEMPLATE_MODULE_COMPONENT_190_REFERENCE = 'template-module-component-190';
    public const TEMPLATE_MODULE_COMPONENT_191_REFERENCE = 'template-module-component-191';
    public const TEMPLATE_MODULE_COMPONENT_192_REFERENCE = 'template-module-component-192';
    public const TEMPLATE_MODULE_COMPONENT_193_REFERENCE = 'template-module-component-193';
    public const TEMPLATE_MODULE_COMPONENT_194_REFERENCE = 'template-module-component-194';
    public const TEMPLATE_MODULE_COMPONENT_195_REFERENCE = 'template-module-component-195';
    public const TEMPLATE_MODULE_COMPONENT_196_REFERENCE = 'template-module-component-196';
    public const TEMPLATE_MODULE_COMPONENT_197_REFERENCE = 'template-module-component-197';
    public const TEMPLATE_MODULE_COMPONENT_198_REFERENCE = 'template-module-component-198';
    public const TEMPLATE_MODULE_COMPONENT_199_REFERENCE = 'template-module-component-199';
    public const TEMPLATE_MODULE_COMPONENT_200_REFERENCE = 'template-module-component-200';
    public const TEMPLATE_MODULE_COMPONENT_201_REFERENCE = 'template-module-component-201';
    public const TEMPLATE_MODULE_COMPONENT_202_REFERENCE = 'template-module-component-202';
    public const TEMPLATE_MODULE_COMPONENT_203_REFERENCE = 'template-module-component-203';
    public const TEMPLATE_MODULE_COMPONENT_204_REFERENCE = 'template-module-component-204';
    public const TEMPLATE_MODULE_COMPONENT_205_REFERENCE = 'template-module-component-205';
    public const TEMPLATE_MODULE_COMPONENT_206_REFERENCE = 'template-module-component-206';
    public const TEMPLATE_MODULE_COMPONENT_207_REFERENCE = 'template-module-component-207';
    public const TEMPLATE_MODULE_COMPONENT_208_REFERENCE = 'template-module-component-208';
    public const TEMPLATE_MODULE_COMPONENT_209_REFERENCE = 'template-module-component-209';
    public const TEMPLATE_MODULE_COMPONENT_210_REFERENCE = 'template-module-component-210';
    public const TEMPLATE_MODULE_COMPONENT_211_REFERENCE = 'template-module-component-211';
    public const TEMPLATE_MODULE_COMPONENT_212_REFERENCE = 'template-module-component-212';
    public const TEMPLATE_MODULE_COMPONENT_213_REFERENCE = 'template-module-component-213';
    public const TEMPLATE_MODULE_COMPONENT_214_REFERENCE = 'template-module-component-214';
    public const TEMPLATE_MODULE_COMPONENT_215_REFERENCE = 'template-module-component-215';
    public const TEMPLATE_MODULE_COMPONENT_216_REFERENCE = 'template-module-component-216';
    public const TEMPLATE_MODULE_COMPONENT_217_REFERENCE = 'template-module-component-217';
    public const TEMPLATE_MODULE_COMPONENT_218_REFERENCE = 'template-module-component-218';
    public const TEMPLATE_MODULE_COMPONENT_219_REFERENCE = 'template-module-component-219';
    public const TEMPLATE_MODULE_COMPONENT_220_REFERENCE = 'template-module-component-220';
    public const TEMPLATE_MODULE_COMPONENT_221_REFERENCE = 'template-module-component-221';
    public const TEMPLATE_MODULE_COMPONENT_222_REFERENCE = 'template-module-component-222';
    public const TEMPLATE_MODULE_COMPONENT_223_REFERENCE = 'template-module-component-223';
    public const TEMPLATE_MODULE_COMPONENT_224_REFERENCE = 'template-module-component-224';
    public const TEMPLATE_MODULE_COMPONENT_225_REFERENCE = 'template-module-component-225';
    public const TEMPLATE_MODULE_COMPONENT_226_REFERENCE = 'template-module-component-226';
    public const TEMPLATE_MODULE_COMPONENT_227_REFERENCE = 'template-module-component-227';
    public const TEMPLATE_MODULE_COMPONENT_228_REFERENCE = 'template-module-component-228';
    public const TEMPLATE_MODULE_COMPONENT_229_REFERENCE = 'template-module-component-229';
    public const TEMPLATE_MODULE_COMPONENT_230_REFERENCE = 'template-module-component-230';
    public const TEMPLATE_MODULE_COMPONENT_231_REFERENCE = 'template-module-component-231';
    public const TEMPLATE_MODULE_COMPONENT_232_REFERENCE = 'template-module-component-232';
    public const TEMPLATE_MODULE_COMPONENT_233_REFERENCE = 'template-module-component-233';
    public const TEMPLATE_MODULE_COMPONENT_234_REFERENCE = 'template-module-component-234';
    public const TEMPLATE_MODULE_COMPONENT_235_REFERENCE = 'template-module-component-235';
    public const TEMPLATE_MODULE_COMPONENT_236_REFERENCE = 'template-module-component-236';
    public const TEMPLATE_MODULE_COMPONENT_237_REFERENCE = 'template-module-component-237';
    public const TEMPLATE_MODULE_COMPONENT_238_REFERENCE = 'template-module-component-238';
    public const TEMPLATE_MODULE_COMPONENT_239_REFERENCE = 'template-module-component-239';
    public const TEMPLATE_MODULE_COMPONENT_240_REFERENCE = 'template-module-component-240';
    public const TEMPLATE_MODULE_COMPONENT_241_REFERENCE = 'template-module-component-241';
    public const TEMPLATE_MODULE_COMPONENT_242_REFERENCE = 'template-module-component-242';
    public const TEMPLATE_MODULE_COMPONENT_243_REFERENCE = 'template-module-component-243';
    public const TEMPLATE_MODULE_COMPONENT_244_REFERENCE = 'template-module-component-244';
    public const TEMPLATE_MODULE_COMPONENT_245_REFERENCE = 'template-module-component-245';
    public const TEMPLATE_MODULE_COMPONENT_246_REFERENCE = 'template-module-component-246';
    public const TEMPLATE_MODULE_COMPONENT_247_REFERENCE = 'template-module-component-247';
    public const TEMPLATE_MODULE_COMPONENT_248_REFERENCE = 'template-module-component-248';
    public const TEMPLATE_MODULE_COMPONENT_249_REFERENCE = 'template-module-component-249';
    public const TEMPLATE_MODULE_COMPONENT_250_REFERENCE = 'template-module-component-250';
    public const TEMPLATE_MODULE_COMPONENT_251_REFERENCE = 'template-module-component-251';
    public const TEMPLATE_MODULE_COMPONENT_252_REFERENCE = 'template-module-component-252';
    public const TEMPLATE_MODULE_COMPONENT_253_REFERENCE = 'template-module-component-253';
    public const TEMPLATE_MODULE_COMPONENT_254_REFERENCE = 'template-module-component-254';
    public const TEMPLATE_MODULE_COMPONENT_255_REFERENCE = 'template-module-component-255';
    public const TEMPLATE_MODULE_COMPONENT_256_REFERENCE = 'template-module-component-256';
    public const TEMPLATE_MODULE_COMPONENT_257_REFERENCE = 'template-module-component-257';
    public const TEMPLATE_MODULE_COMPONENT_258_REFERENCE = 'template-module-component-258';
    public const TEMPLATE_MODULE_COMPONENT_259_REFERENCE = 'template-module-component-259';
    public const TEMPLATE_MODULE_COMPONENT_260_REFERENCE = 'template-module-component-260';
    public const TEMPLATE_MODULE_COMPONENT_261_REFERENCE = 'template-module-component-261';
    public const TEMPLATE_MODULE_COMPONENT_262_REFERENCE = 'template-module-component-262';
    public const TEMPLATE_MODULE_COMPONENT_263_REFERENCE = 'template-module-component-263';
    public const TEMPLATE_MODULE_COMPONENT_264_REFERENCE = 'template-module-component-264';
    public const TEMPLATE_MODULE_COMPONENT_265_REFERENCE = 'template-module-component-265';
    public const TEMPLATE_MODULE_COMPONENT_266_REFERENCE = 'template-module-component-266';
    public const TEMPLATE_MODULE_COMPONENT_267_REFERENCE = 'template-module-component-267';
    public const TEMPLATE_MODULE_COMPONENT_268_REFERENCE = 'template-module-component-268';
    public const TEMPLATE_MODULE_COMPONENT_269_REFERENCE = 'template-module-component-269';
    public const TEMPLATE_MODULE_COMPONENT_270_REFERENCE = 'template-module-component-270';
    public const TEMPLATE_MODULE_COMPONENT_271_REFERENCE = 'template-module-component-271';
    public const TEMPLATE_MODULE_COMPONENT_272_REFERENCE = 'template-module-component-272';
    public const TEMPLATE_MODULE_COMPONENT_273_REFERENCE = 'template-module-component-273';
    public const TEMPLATE_MODULE_COMPONENT_274_REFERENCE = 'template-module-component-274';
    public const TEMPLATE_MODULE_COMPONENT_275_REFERENCE = 'template-module-component-275';
    public const TEMPLATE_MODULE_COMPONENT_276_REFERENCE = 'template-module-component-276';
    public const TEMPLATE_MODULE_COMPONENT_277_REFERENCE = 'template-module-component-277';
    public const TEMPLATE_MODULE_COMPONENT_278_REFERENCE = 'template-module-component-278';
    public const TEMPLATE_MODULE_COMPONENT_279_REFERENCE = 'template-module-component-279';
    public const TEMPLATE_MODULE_COMPONENT_280_REFERENCE = 'template-module-component-280';
    public const TEMPLATE_MODULE_COMPONENT_281_REFERENCE = 'template-module-component-281';
    public const TEMPLATE_MODULE_COMPONENT_282_REFERENCE = 'template-module-component-282';
    public const TEMPLATE_MODULE_COMPONENT_283_REFERENCE = 'template-module-component-283';
    public const TEMPLATE_MODULE_COMPONENT_284_REFERENCE = 'template-module-component-284';
    public const TEMPLATE_MODULE_COMPONENT_285_REFERENCE = 'template-module-component-285';
    public const TEMPLATE_MODULE_COMPONENT_286_REFERENCE = 'template-module-component-286';
    public const TEMPLATE_MODULE_COMPONENT_287_REFERENCE = 'template-module-component-287';
    public const TEMPLATE_MODULE_COMPONENT_288_REFERENCE = 'template-module-component-288';
    public const TEMPLATE_MODULE_COMPONENT_289_REFERENCE = 'template-module-component-289';
    public const TEMPLATE_MODULE_COMPONENT_290_REFERENCE = 'template-module-component-290';
    public const TEMPLATE_MODULE_COMPONENT_291_REFERENCE = 'template-module-component-291';
    public const TEMPLATE_MODULE_COMPONENT_292_REFERENCE = 'template-module-component-292';
    public const TEMPLATE_MODULE_COMPONENT_293_REFERENCE = 'template-module-component-293';
    public const TEMPLATE_MODULE_COMPONENT_294_REFERENCE = 'template-module-component-294';
    public const TEMPLATE_MODULE_COMPONENT_295_REFERENCE = 'template-module-component-295';
    public const TEMPLATE_MODULE_COMPONENT_296_REFERENCE = 'template-module-component-296';
    public const TEMPLATE_MODULE_COMPONENT_297_REFERENCE = 'template-module-component-297';
    public const TEMPLATE_MODULE_COMPONENT_298_REFERENCE = 'template-module-component-298';
    public const TEMPLATE_MODULE_COMPONENT_299_REFERENCE = 'template-module-component-299';
    public const TEMPLATE_MODULE_COMPONENT_300_REFERENCE = 'template-module-component-300';
    public const TEMPLATE_MODULE_COMPONENT_301_REFERENCE = 'template-module-component-301';
    public const TEMPLATE_MODULE_COMPONENT_302_REFERENCE = 'template-module-component-302';
    public const TEMPLATE_MODULE_COMPONENT_303_REFERENCE = 'template-module-component-303';
    public const TEMPLATE_MODULE_COMPONENT_304_REFERENCE = 'template-module-component-304';
    public const TEMPLATE_MODULE_COMPONENT_305_REFERENCE = 'template-module-component-305';
    public const TEMPLATE_MODULE_COMPONENT_306_REFERENCE = 'template-module-component-306';
    public const TEMPLATE_MODULE_COMPONENT_307_REFERENCE = 'template-module-component-307';
    public const TEMPLATE_MODULE_COMPONENT_308_REFERENCE = 'template-module-component-308';
    public const TEMPLATE_MODULE_COMPONENT_309_REFERENCE = 'template-module-component-309';
    public const TEMPLATE_MODULE_COMPONENT_310_REFERENCE = 'template-module-component-310';
    public const TEMPLATE_MODULE_COMPONENT_311_REFERENCE = 'template-module-component-311';
    public const TEMPLATE_MODULE_COMPONENT_312_REFERENCE = 'template-module-component-312';
    public const TEMPLATE_MODULE_COMPONENT_313_REFERENCE = 'template-module-component-313';
    public const TEMPLATE_MODULE_COMPONENT_314_REFERENCE = 'template-module-component-314';
    public const TEMPLATE_MODULE_COMPONENT_315_REFERENCE = 'template-module-component-315';
    public const TEMPLATE_MODULE_COMPONENT_316_REFERENCE = 'template-module-component-316';
    public const TEMPLATE_MODULE_COMPONENT_317_REFERENCE = 'template-module-component-317';
    public const TEMPLATE_MODULE_COMPONENT_318_REFERENCE = 'template-module-component-318';
    public const TEMPLATE_MODULE_COMPONENT_319_REFERENCE = 'template-module-component-319';
    public const TEMPLATE_MODULE_COMPONENT_320_REFERENCE = 'template-module-component-320';
    public const TEMPLATE_MODULE_COMPONENT_321_REFERENCE = 'template-module-component-321';
    public const TEMPLATE_MODULE_COMPONENT_322_REFERENCE = 'template-module-component-322';
    public const TEMPLATE_MODULE_COMPONENT_323_REFERENCE = 'template-module-component-323';
    public const TEMPLATE_MODULE_COMPONENT_324_REFERENCE = 'template-module-component-324';
    public const TEMPLATE_MODULE_COMPONENT_325_REFERENCE = 'template-module-component-325';
    public const TEMPLATE_MODULE_COMPONENT_326_REFERENCE = 'template-module-component-326';
    public const TEMPLATE_MODULE_COMPONENT_327_REFERENCE = 'template-module-component-327';
    public const TEMPLATE_MODULE_COMPONENT_328_REFERENCE = 'template-module-component-328';
    public const TEMPLATE_MODULE_COMPONENT_329_REFERENCE = 'template-module-component-329';
    public const TEMPLATE_MODULE_COMPONENT_330_REFERENCE = 'template-module-component-330';
    public const TEMPLATE_MODULE_COMPONENT_331_REFERENCE = 'template-module-component-331';
    public const TEMPLATE_MODULE_COMPONENT_332_REFERENCE = 'template-module-component-332';
    public const TEMPLATE_MODULE_COMPONENT_333_REFERENCE = 'template-module-component-333';
    public const TEMPLATE_MODULE_COMPONENT_334_REFERENCE = 'template-module-component-334';
    public const TEMPLATE_MODULE_COMPONENT_335_REFERENCE = 'template-module-component-335';
    public const TEMPLATE_MODULE_COMPONENT_336_REFERENCE = 'template-module-component-336';
    public const TEMPLATE_MODULE_COMPONENT_337_REFERENCE = 'template-module-component-337';
    public const TEMPLATE_MODULE_COMPONENT_338_REFERENCE = 'template-module-component-338';
    public const TEMPLATE_MODULE_COMPONENT_339_REFERENCE = 'template-module-component-339';
    public const TEMPLATE_MODULE_COMPONENT_340_REFERENCE = 'template-module-component-340';
    public const TEMPLATE_MODULE_COMPONENT_341_REFERENCE = 'template-module-component-341';
    public const TEMPLATE_MODULE_COMPONENT_342_REFERENCE = 'template-module-component-342';
    public const TEMPLATE_MODULE_COMPONENT_343_REFERENCE = 'template-module-component-343';
    public const TEMPLATE_MODULE_COMPONENT_344_REFERENCE = 'template-module-component-344';
    public const TEMPLATE_MODULE_COMPONENT_345_REFERENCE = 'template-module-component-345';
    public const TEMPLATE_MODULE_COMPONENT_346_REFERENCE = 'template-module-component-346';
    public const TEMPLATE_MODULE_COMPONENT_347_REFERENCE = 'template-module-component-347';
    public const TEMPLATE_MODULE_COMPONENT_348_REFERENCE = 'template-module-component-348';
    public const TEMPLATE_MODULE_COMPONENT_349_REFERENCE = 'template-module-component-349';
    public const TEMPLATE_MODULE_COMPONENT_350_REFERENCE = 'template-module-component-350';
    public const TEMPLATE_MODULE_COMPONENT_351_REFERENCE = 'template-module-component-351';
    public const TEMPLATE_MODULE_COMPONENT_352_REFERENCE = 'template-module-component-352';
    public const TEMPLATE_MODULE_COMPONENT_353_REFERENCE = 'template-module-component-353';
    public const TEMPLATE_MODULE_COMPONENT_354_REFERENCE = 'template-module-component-354';
    public const TEMPLATE_MODULE_COMPONENT_355_REFERENCE = 'template-module-component-355';
    public const TEMPLATE_MODULE_COMPONENT_356_REFERENCE = 'template-module-component-356';
    public const TEMPLATE_MODULE_COMPONENT_357_REFERENCE = 'template-module-component-357';
    public const TEMPLATE_MODULE_COMPONENT_358_REFERENCE = 'template-module-component-358';
    public const TEMPLATE_MODULE_COMPONENT_359_REFERENCE = 'template-module-component-359';
    public const TEMPLATE_MODULE_COMPONENT_360_REFERENCE = 'template-module-component-360';
    public const TEMPLATE_MODULE_COMPONENT_361_REFERENCE = 'template-module-component-361';
    public const TEMPLATE_MODULE_COMPONENT_362_REFERENCE = 'template-module-component-362';
    public const TEMPLATE_MODULE_COMPONENT_363_REFERENCE = 'template-module-component-363';
    public const TEMPLATE_MODULE_COMPONENT_364_REFERENCE = 'template-module-component-364';
    public const TEMPLATE_MODULE_COMPONENT_365_REFERENCE = 'template-module-component-365';
    public const TEMPLATE_MODULE_COMPONENT_366_REFERENCE = 'template-module-component-366';
    public const TEMPLATE_MODULE_COMPONENT_367_REFERENCE = 'template-module-component-367';
    public const TEMPLATE_MODULE_COMPONENT_368_REFERENCE = 'template-module-component-368';
    public const TEMPLATE_MODULE_COMPONENT_369_REFERENCE = 'template-module-component-369';
    public const TEMPLATE_MODULE_COMPONENT_370_REFERENCE = 'template-module-component-370';
    public const TEMPLATE_MODULE_COMPONENT_371_REFERENCE = 'template-module-component-371';
    public const TEMPLATE_MODULE_COMPONENT_372_REFERENCE = 'template-module-component-372';
    public const TEMPLATE_MODULE_COMPONENT_373_REFERENCE = 'template-module-component-373';
    public const TEMPLATE_MODULE_COMPONENT_374_REFERENCE = 'template-module-component-374';
    public const TEMPLATE_MODULE_COMPONENT_375_REFERENCE = 'template-module-component-375';
    public const TEMPLATE_MODULE_COMPONENT_376_REFERENCE = 'template-module-component-376';
    public const TEMPLATE_MODULE_COMPONENT_377_REFERENCE = 'template-module-component-377';
    public const TEMPLATE_MODULE_COMPONENT_378_REFERENCE = 'template-module-component-378';
    public const TEMPLATE_MODULE_COMPONENT_379_REFERENCE = 'template-module-component-379';
    public const TEMPLATE_MODULE_COMPONENT_380_REFERENCE = 'template-module-component-380';
    public const TEMPLATE_MODULE_COMPONENT_381_REFERENCE = 'template-module-component-381';
    public const TEMPLATE_MODULE_COMPONENT_382_REFERENCE = 'template-module-component-382';
    public const TEMPLATE_MODULE_COMPONENT_383_REFERENCE = 'template-module-component-383';
    public const TEMPLATE_MODULE_COMPONENT_384_REFERENCE = 'template-module-component-384';
    public const TEMPLATE_MODULE_COMPONENT_385_REFERENCE = 'template-module-component-385';
    public const TEMPLATE_MODULE_COMPONENT_386_REFERENCE = 'template-module-component-386';
    public const TEMPLATE_MODULE_COMPONENT_387_REFERENCE = 'template-module-component-387';
    public const TEMPLATE_MODULE_COMPONENT_388_REFERENCE = 'template-module-component-388';
    public const TEMPLATE_MODULE_COMPONENT_389_REFERENCE = 'template-module-component-389';
    public const TEMPLATE_MODULE_COMPONENT_390_REFERENCE = 'template-module-component-390';
    public const TEMPLATE_MODULE_COMPONENT_391_REFERENCE = 'template-module-component-391';
    public const TEMPLATE_MODULE_COMPONENT_392_REFERENCE = 'template-module-component-392';
    public const TEMPLATE_MODULE_COMPONENT_393_REFERENCE = 'template-module-component-393';
    public const TEMPLATE_MODULE_COMPONENT_394_REFERENCE = 'template-module-component-394';
    public const TEMPLATE_MODULE_COMPONENT_395_REFERENCE = 'template-module-component-395';
    public const TEMPLATE_MODULE_COMPONENT_396_REFERENCE = 'template-module-component-396';
    public const TEMPLATE_MODULE_COMPONENT_397_REFERENCE = 'template-module-component-397';
    public const TEMPLATE_MODULE_COMPONENT_398_REFERENCE = 'template-module-component-398';
    public const TEMPLATE_MODULE_COMPONENT_399_REFERENCE = 'template-module-component-399';
    public const TEMPLATE_MODULE_COMPONENT_400_REFERENCE = 'template-module-component-400';
    public const TEMPLATE_MODULE_COMPONENT_401_REFERENCE = 'template-module-component-401';
    public const TEMPLATE_MODULE_COMPONENT_402_REFERENCE = 'template-module-component-402';
    public const TEMPLATE_MODULE_COMPONENT_403_REFERENCE = 'template-module-component-403';
    public const TEMPLATE_MODULE_COMPONENT_404_REFERENCE = 'template-module-component-404';
    public const TEMPLATE_MODULE_COMPONENT_405_REFERENCE = 'template-module-component-405';
    public const TEMPLATE_MODULE_COMPONENT_406_REFERENCE = 'template-module-component-406';
    public const TEMPLATE_MODULE_COMPONENT_407_REFERENCE = 'template-module-component-407';
    public const TEMPLATE_MODULE_COMPONENT_408_REFERENCE = 'template-module-component-408';
    public const TEMPLATE_MODULE_COMPONENT_409_REFERENCE = 'template-module-component-409';
    public const TEMPLATE_MODULE_COMPONENT_410_REFERENCE = 'template-module-component-410';
    public const TEMPLATE_MODULE_COMPONENT_411_REFERENCE = 'template-module-component-411';
    public const TEMPLATE_MODULE_COMPONENT_412_REFERENCE = 'template-module-component-412';
    public const TEMPLATE_MODULE_COMPONENT_413_REFERENCE = 'template-module-component-413';
    public const TEMPLATE_MODULE_COMPONENT_414_REFERENCE = 'template-module-component-414';
    public const TEMPLATE_MODULE_COMPONENT_415_REFERENCE = 'template-module-component-415';
    public const TEMPLATE_MODULE_COMPONENT_416_REFERENCE = 'template-module-component-416';
    public const TEMPLATE_MODULE_COMPONENT_417_REFERENCE = 'template-module-component-417';
    public const TEMPLATE_MODULE_COMPONENT_418_REFERENCE = 'template-module-component-418';
    public const TEMPLATE_MODULE_COMPONENT_419_REFERENCE = 'template-module-component-419';
    public const TEMPLATE_MODULE_COMPONENT_420_REFERENCE = 'template-module-component-420';
    public const TEMPLATE_MODULE_COMPONENT_421_REFERENCE = 'template-module-component-421';
    public const TEMPLATE_MODULE_COMPONENT_422_REFERENCE = 'template-module-component-422';
    public const TEMPLATE_MODULE_COMPONENT_423_REFERENCE = 'template-module-component-423';
    public const TEMPLATE_MODULE_COMPONENT_424_REFERENCE = 'template-module-component-424';
    public const TEMPLATE_MODULE_COMPONENT_425_REFERENCE = 'template-module-component-425';
    public const TEMPLATE_MODULE_COMPONENT_426_REFERENCE = 'template-module-component-426';
    public const TEMPLATE_MODULE_COMPONENT_427_REFERENCE = 'template-module-component-427';
    public const TEMPLATE_MODULE_COMPONENT_428_REFERENCE = 'template-module-component-428';
    public const TEMPLATE_MODULE_COMPONENT_429_REFERENCE = 'template-module-component-429';
    public const TEMPLATE_MODULE_COMPONENT_430_REFERENCE = 'template-module-component-430';
    public const TEMPLATE_MODULE_COMPONENT_431_REFERENCE = 'template-module-component-431';
    public const TEMPLATE_MODULE_COMPONENT_432_REFERENCE = 'template-module-component-432';
    public const TEMPLATE_MODULE_COMPONENT_433_REFERENCE = 'template-module-component-433';
    public const TEMPLATE_MODULE_COMPONENT_434_REFERENCE = 'template-module-component-434';
    public const TEMPLATE_MODULE_COMPONENT_435_REFERENCE = 'template-module-component-435';
    public const TEMPLATE_MODULE_COMPONENT_436_REFERENCE = 'template-module-component-436';
    public const TEMPLATE_MODULE_COMPONENT_437_REFERENCE = 'template-module-component-437';
    public const TEMPLATE_MODULE_COMPONENT_438_REFERENCE = 'template-module-component-438';
    public const TEMPLATE_MODULE_COMPONENT_439_REFERENCE = 'template-module-component-439';
    public const TEMPLATE_MODULE_COMPONENT_440_REFERENCE = 'template-module-component-440';
    public const TEMPLATE_MODULE_COMPONENT_441_REFERENCE = 'template-module-component-441';
    public const TEMPLATE_MODULE_COMPONENT_442_REFERENCE = 'template-module-component-442';
    public const TEMPLATE_MODULE_COMPONENT_443_REFERENCE = 'template-module-component-443';
    public const TEMPLATE_MODULE_COMPONENT_444_REFERENCE = 'template-module-component-444';
    public const TEMPLATE_MODULE_COMPONENT_445_REFERENCE = 'template-module-component-445';
    public const TEMPLATE_MODULE_COMPONENT_446_REFERENCE = 'template-module-component-446';
    public const TEMPLATE_MODULE_COMPONENT_447_REFERENCE = 'template-module-component-447';
    public const TEMPLATE_MODULE_COMPONENT_448_REFERENCE = 'template-module-component-448';
    public const TEMPLATE_MODULE_COMPONENT_449_REFERENCE = 'template-module-component-449';
    public const TEMPLATE_MODULE_COMPONENT_450_REFERENCE = 'template-module-component-450';
    public const TEMPLATE_MODULE_COMPONENT_451_REFERENCE = 'template-module-component-451';
    public const TEMPLATE_MODULE_COMPONENT_452_REFERENCE = 'template-module-component-452';
    public const TEMPLATE_MODULE_COMPONENT_453_REFERENCE = 'template-module-component-453';
    public const TEMPLATE_MODULE_COMPONENT_454_REFERENCE = 'template-module-component-454';
    public const TEMPLATE_MODULE_COMPONENT_455_REFERENCE = 'template-module-component-455';
    public const TEMPLATE_MODULE_COMPONENT_456_REFERENCE = 'template-module-component-456';
    public const TEMPLATE_MODULE_COMPONENT_457_REFERENCE = 'template-module-component-457';
    public const TEMPLATE_MODULE_COMPONENT_458_REFERENCE = 'template-module-component-458';
    public const TEMPLATE_MODULE_COMPONENT_459_REFERENCE = 'template-module-component-459';
    public const TEMPLATE_MODULE_COMPONENT_460_REFERENCE = 'template-module-component-460';
    public const TEMPLATE_MODULE_COMPONENT_461_REFERENCE = 'template-module-component-461';
    public const TEMPLATE_MODULE_COMPONENT_462_REFERENCE = 'template-module-component-462';
    public const TEMPLATE_MODULE_COMPONENT_463_REFERENCE = 'template-module-component-463';
    public const TEMPLATE_MODULE_COMPONENT_464_REFERENCE = 'template-module-component-464';
    public const TEMPLATE_MODULE_COMPONENT_465_REFERENCE = 'template-module-component-465';
    public const TEMPLATE_MODULE_COMPONENT_466_REFERENCE = 'template-module-component-466';
    public const TEMPLATE_MODULE_COMPONENT_467_REFERENCE = 'template-module-component-467';
    public const TEMPLATE_MODULE_COMPONENT_468_REFERENCE = 'template-module-component-468';
    public const TEMPLATE_MODULE_COMPONENT_469_REFERENCE = 'template-module-component-469';
    public const TEMPLATE_MODULE_COMPONENT_470_REFERENCE = 'template-module-component-470';
    public const TEMPLATE_MODULE_COMPONENT_471_REFERENCE = 'template-module-component-471';
    public const TEMPLATE_MODULE_COMPONENT_472_REFERENCE = 'template-module-component-472';
    public const TEMPLATE_MODULE_COMPONENT_473_REFERENCE = 'template-module-component-473';
    public const TEMPLATE_MODULE_COMPONENT_474_REFERENCE = 'template-module-component-474';
    public const TEMPLATE_MODULE_COMPONENT_475_REFERENCE = 'template-module-component-475';
    public const TEMPLATE_MODULE_COMPONENT_476_REFERENCE = 'template-module-component-476';
    public const TEMPLATE_MODULE_COMPONENT_477_REFERENCE = 'template-module-component-477';
    public const TEMPLATE_MODULE_COMPONENT_478_REFERENCE = 'template-module-component-478';
    public const TEMPLATE_MODULE_COMPONENT_479_REFERENCE = 'template-module-component-479';
    public const TEMPLATE_MODULE_COMPONENT_480_REFERENCE = 'template-module-component-480';
    public const TEMPLATE_MODULE_COMPONENT_481_REFERENCE = 'template-module-component-481';
    public const TEMPLATE_MODULE_COMPONENT_482_REFERENCE = 'template-module-component-482';
    public const TEMPLATE_MODULE_COMPONENT_483_REFERENCE = 'template-module-component-483';
    public const TEMPLATE_MODULE_COMPONENT_484_REFERENCE = 'template-module-component-484';
    public const TEMPLATE_MODULE_COMPONENT_485_REFERENCE = 'template-module-component-485';
    public const TEMPLATE_MODULE_COMPONENT_486_REFERENCE = 'template-module-component-486';
    public const TEMPLATE_MODULE_COMPONENT_487_REFERENCE = 'template-module-component-487';
    public const TEMPLATE_MODULE_COMPONENT_488_REFERENCE = 'template-module-component-488';
    public const TEMPLATE_MODULE_COMPONENT_489_REFERENCE = 'template-module-component-489';
    public const TEMPLATE_MODULE_COMPONENT_490_REFERENCE = 'template-module-component-490';
    public const TEMPLATE_MODULE_COMPONENT_491_REFERENCE = 'template-module-component-491';
    public const TEMPLATE_MODULE_COMPONENT_492_REFERENCE = 'template-module-component-492';
    public const TEMPLATE_MODULE_COMPONENT_493_REFERENCE = 'template-module-component-493';
    public const TEMPLATE_MODULE_COMPONENT_494_REFERENCE = 'template-module-component-494';
    public const TEMPLATE_MODULE_COMPONENT_495_REFERENCE = 'template-module-component-495';
    public const TEMPLATE_MODULE_COMPONENT_496_REFERENCE = 'template-module-component-496';
    public const TEMPLATE_MODULE_COMPONENT_497_REFERENCE = 'template-module-component-497';
    public const TEMPLATE_MODULE_COMPONENT_498_REFERENCE = 'template-module-component-498';
    public const TEMPLATE_MODULE_COMPONENT_499_REFERENCE = 'template-module-component-499';
    public const TEMPLATE_MODULE_COMPONENT_500_REFERENCE = 'template-module-component-500';
    public const TEMPLATE_MODULE_COMPONENT_501_REFERENCE = 'template-module-component-501';
    public const TEMPLATE_MODULE_COMPONENT_502_REFERENCE = 'template-module-component-502';
    public const TEMPLATE_MODULE_COMPONENT_503_REFERENCE = 'template-module-component-503';
    public const TEMPLATE_MODULE_COMPONENT_504_REFERENCE = 'template-module-component-504';
    public const TEMPLATE_MODULE_COMPONENT_505_REFERENCE = 'template-module-component-505';
    public const TEMPLATE_MODULE_COMPONENT_506_REFERENCE = 'template-module-component-506';
    public const TEMPLATE_MODULE_COMPONENT_507_REFERENCE = 'template-module-component-507';
    public const TEMPLATE_MODULE_COMPONENT_508_REFERENCE = 'template-module-component-508';
    public const TEMPLATE_MODULE_COMPONENT_509_REFERENCE = 'template-module-component-509';
    public const TEMPLATE_MODULE_COMPONENT_510_REFERENCE = 'template-module-component-510';
    public const TEMPLATE_MODULE_COMPONENT_511_REFERENCE = 'template-module-component-511';
    public const TEMPLATE_MODULE_COMPONENT_512_REFERENCE = 'template-module-component-512';
    public const TEMPLATE_MODULE_COMPONENT_513_REFERENCE = 'template-module-component-513';
    public const TEMPLATE_MODULE_COMPONENT_514_REFERENCE = 'template-module-component-514';
    public const TEMPLATE_MODULE_COMPONENT_515_REFERENCE = 'template-module-component-515';
    public const TEMPLATE_MODULE_COMPONENT_516_REFERENCE = 'template-module-component-516';
    public const TEMPLATE_MODULE_COMPONENT_517_REFERENCE = 'template-module-component-517';
    public const TEMPLATE_MODULE_COMPONENT_518_REFERENCE = 'template-module-component-518';
    public const TEMPLATE_MODULE_COMPONENT_519_REFERENCE = 'template-module-component-519';
    public const TEMPLATE_MODULE_COMPONENT_520_REFERENCE = 'template-module-component-520';
    public const TEMPLATE_MODULE_COMPONENT_521_REFERENCE = 'template-module-component-521';
    public const TEMPLATE_MODULE_COMPONENT_522_REFERENCE = 'template-module-component-522';
    public const TEMPLATE_MODULE_COMPONENT_523_REFERENCE = 'template-module-component-523';
    public const TEMPLATE_MODULE_COMPONENT_524_REFERENCE = 'template-module-component-524';
    public const TEMPLATE_MODULE_COMPONENT_525_REFERENCE = 'template-module-component-525';
    public const TEMPLATE_MODULE_COMPONENT_526_REFERENCE = 'template-module-component-526';
    public const TEMPLATE_MODULE_COMPONENT_527_REFERENCE = 'template-module-component-527';
    public const TEMPLATE_MODULE_COMPONENT_528_REFERENCE = 'template-module-component-528';
    public const TEMPLATE_MODULE_COMPONENT_529_REFERENCE = 'template-module-component-529';
    public const TEMPLATE_MODULE_COMPONENT_530_REFERENCE = 'template-module-component-530';
    public const TEMPLATE_MODULE_COMPONENT_531_REFERENCE = 'template-module-component-531';
    public const TEMPLATE_MODULE_COMPONENT_532_REFERENCE = 'template-module-component-532';
    public const TEMPLATE_MODULE_COMPONENT_533_REFERENCE = 'template-module-component-533';
    public const TEMPLATE_MODULE_COMPONENT_534_REFERENCE = 'template-module-component-534';
    public const TEMPLATE_MODULE_COMPONENT_535_REFERENCE = 'template-module-component-535';
    public const TEMPLATE_MODULE_COMPONENT_536_REFERENCE = 'template-module-component-536';
    public const TEMPLATE_MODULE_COMPONENT_537_REFERENCE = 'template-module-component-537';
    public const TEMPLATE_MODULE_COMPONENT_538_REFERENCE = 'template-module-component-538';
    public const TEMPLATE_MODULE_COMPONENT_539_REFERENCE = 'template-module-component-539';
    public const TEMPLATE_MODULE_COMPONENT_540_REFERENCE = 'template-module-component-540';
    public const TEMPLATE_MODULE_COMPONENT_541_REFERENCE = 'template-module-component-541';
    public const TEMPLATE_MODULE_COMPONENT_542_REFERENCE = 'template-module-component-542';
    public const TEMPLATE_MODULE_COMPONENT_543_REFERENCE = 'template-module-component-543';
    public const TEMPLATE_MODULE_COMPONENT_544_REFERENCE = 'template-module-component-544';
    public const TEMPLATE_MODULE_COMPONENT_545_REFERENCE = 'template-module-component-545';
    public const TEMPLATE_MODULE_COMPONENT_546_REFERENCE = 'template-module-component-546';
    public const TEMPLATE_MODULE_COMPONENT_547_REFERENCE = 'template-module-component-547';
    public const TEMPLATE_MODULE_COMPONENT_548_REFERENCE = 'template-module-component-548';
    public const TEMPLATE_MODULE_COMPONENT_549_REFERENCE = 'template-module-component-549';
    public const TEMPLATE_MODULE_COMPONENT_550_REFERENCE = 'template-module-component-550';
    public const TEMPLATE_MODULE_COMPONENT_551_REFERENCE = 'template-module-component-551';
    public const TEMPLATE_MODULE_COMPONENT_552_REFERENCE = 'template-module-component-552';
    public const TEMPLATE_MODULE_COMPONENT_553_REFERENCE = 'template-module-component-553';
    public const TEMPLATE_MODULE_COMPONENT_554_REFERENCE = 'template-module-component-554';
    public const TEMPLATE_MODULE_COMPONENT_555_REFERENCE = 'template-module-component-555';
    public const TEMPLATE_MODULE_COMPONENT_556_REFERENCE = 'template-module-component-556';
    public const TEMPLATE_MODULE_COMPONENT_557_REFERENCE = 'template-module-component-557';
    public const TEMPLATE_MODULE_COMPONENT_558_REFERENCE = 'template-module-component-558';
    public const TEMPLATE_MODULE_COMPONENT_559_REFERENCE = 'template-module-component-559';
    public const TEMPLATE_MODULE_COMPONENT_560_REFERENCE = 'template-module-component-560';
    public const TEMPLATE_MODULE_COMPONENT_561_REFERENCE = 'template-module-component-561';
    public const TEMPLATE_MODULE_COMPONENT_562_REFERENCE = 'template-module-component-562';
    public const TEMPLATE_MODULE_COMPONENT_563_REFERENCE = 'template-module-component-563';
    public const TEMPLATE_MODULE_COMPONENT_564_REFERENCE = 'template-module-component-564';
    public const TEMPLATE_MODULE_COMPONENT_565_REFERENCE = 'template-module-component-565';
    public const TEMPLATE_MODULE_COMPONENT_566_REFERENCE = 'template-module-component-566';
    public const TEMPLATE_MODULE_COMPONENT_567_REFERENCE = 'template-module-component-567';
    public const TEMPLATE_MODULE_COMPONENT_568_REFERENCE = 'template-module-component-568';
    public const TEMPLATE_MODULE_COMPONENT_569_REFERENCE = 'template-module-component-569';
    public const TEMPLATE_MODULE_COMPONENT_570_REFERENCE = 'template-module-component-570';
    public const TEMPLATE_MODULE_COMPONENT_571_REFERENCE = 'template-module-component-571';
    public const TEMPLATE_MODULE_COMPONENT_572_REFERENCE = 'template-module-component-572';
    public const TEMPLATE_MODULE_COMPONENT_573_REFERENCE = 'template-module-component-573';
    public const TEMPLATE_MODULE_COMPONENT_574_REFERENCE = 'template-module-component-574';
    public const TEMPLATE_MODULE_COMPONENT_575_REFERENCE = 'template-module-component-575';
    public const TEMPLATE_MODULE_COMPONENT_576_REFERENCE = 'template-module-component-576';
    public const TEMPLATE_MODULE_COMPONENT_577_REFERENCE = 'template-module-component-577';
    public const TEMPLATE_MODULE_COMPONENT_578_REFERENCE = 'template-module-component-578';
    public const TEMPLATE_MODULE_COMPONENT_579_REFERENCE = 'template-module-component-579';
    public const TEMPLATE_MODULE_COMPONENT_580_REFERENCE = 'template-module-component-580';
    public const TEMPLATE_MODULE_COMPONENT_581_REFERENCE = 'template-module-component-581';
    public const TEMPLATE_MODULE_COMPONENT_582_REFERENCE = 'template-module-component-582';
    public const TEMPLATE_MODULE_COMPONENT_583_REFERENCE = 'template-module-component-583';
    public const TEMPLATE_MODULE_COMPONENT_584_REFERENCE = 'template-module-component-584';
    public const TEMPLATE_MODULE_COMPONENT_585_REFERENCE = 'template-module-component-585';
    public const TEMPLATE_MODULE_COMPONENT_586_REFERENCE = 'template-module-component-586';
    public const TEMPLATE_MODULE_COMPONENT_587_REFERENCE = 'template-module-component-587';
    public const TEMPLATE_MODULE_COMPONENT_588_REFERENCE = 'template-module-component-588';
    public const TEMPLATE_MODULE_COMPONENT_589_REFERENCE = 'template-module-component-589';
    public const TEMPLATE_MODULE_COMPONENT_590_REFERENCE = 'template-module-component-590';
    public const TEMPLATE_MODULE_COMPONENT_591_REFERENCE = 'template-module-component-591';
    public const TEMPLATE_MODULE_COMPONENT_592_REFERENCE = 'template-module-component-592';
    public const TEMPLATE_MODULE_COMPONENT_593_REFERENCE = 'template-module-component-593';
    public const TEMPLATE_MODULE_COMPONENT_594_REFERENCE = 'template-module-component-594';
    public const TEMPLATE_MODULE_COMPONENT_595_REFERENCE = 'template-module-component-595';
    public const TEMPLATE_MODULE_COMPONENT_596_REFERENCE = 'template-module-component-596';
    public const TEMPLATE_MODULE_COMPONENT_597_REFERENCE = 'template-module-component-597';
    public const TEMPLATE_MODULE_COMPONENT_598_REFERENCE = 'template-module-component-598';
    public const TEMPLATE_MODULE_COMPONENT_599_REFERENCE = 'template-module-component-599';
    public const TEMPLATE_MODULE_COMPONENT_600_REFERENCE = 'template-module-component-600';
    public const TEMPLATE_MODULE_COMPONENT_601_REFERENCE = 'template-module-component-601';
    public const TEMPLATE_MODULE_COMPONENT_602_REFERENCE = 'template-module-component-602';
    public const TEMPLATE_MODULE_COMPONENT_603_REFERENCE = 'template-module-component-603';
    public const TEMPLATE_MODULE_COMPONENT_604_REFERENCE = 'template-module-component-604';
    public const TEMPLATE_MODULE_COMPONENT_605_REFERENCE = 'template-module-component-605';
    public const TEMPLATE_MODULE_COMPONENT_606_REFERENCE = 'template-module-component-606';
    public const TEMPLATE_MODULE_COMPONENT_607_REFERENCE = 'template-module-component-607';
    public const TEMPLATE_MODULE_COMPONENT_608_REFERENCE = 'template-module-component-608';
    public const TEMPLATE_MODULE_COMPONENT_609_REFERENCE = 'template-module-component-609';
    public const TEMPLATE_MODULE_COMPONENT_610_REFERENCE = 'template-module-component-610';
    public const TEMPLATE_MODULE_COMPONENT_611_REFERENCE = 'template-module-component-611';
    public const TEMPLATE_MODULE_COMPONENT_612_REFERENCE = 'template-module-component-612';
    public const TEMPLATE_MODULE_COMPONENT_613_REFERENCE = 'template-module-component-613';
    public const TEMPLATE_MODULE_COMPONENT_614_REFERENCE = 'template-module-component-614';
    public const TEMPLATE_MODULE_COMPONENT_615_REFERENCE = 'template-module-component-615';
    public const TEMPLATE_MODULE_COMPONENT_616_REFERENCE = 'template-module-component-616';
    public const TEMPLATE_MODULE_COMPONENT_617_REFERENCE = 'template-module-component-617';
    public const TEMPLATE_MODULE_COMPONENT_618_REFERENCE = 'template-module-component-618';
    public const TEMPLATE_MODULE_COMPONENT_619_REFERENCE = 'template-module-component-619';
    public const TEMPLATE_MODULE_COMPONENT_620_REFERENCE = 'template-module-component-620';
    public const TEMPLATE_MODULE_COMPONENT_621_REFERENCE = 'template-module-component-621';
    public const TEMPLATE_MODULE_COMPONENT_622_REFERENCE = 'template-module-component-622';
    public const TEMPLATE_MODULE_COMPONENT_623_REFERENCE = 'template-module-component-623';
    public const TEMPLATE_MODULE_COMPONENT_624_REFERENCE = 'template-module-component-624';
    public const TEMPLATE_MODULE_COMPONENT_625_REFERENCE = 'template-module-component-625';
    public const TEMPLATE_MODULE_COMPONENT_626_REFERENCE = 'template-module-component-626';
    public const TEMPLATE_MODULE_COMPONENT_627_REFERENCE = 'template-module-component-627';
    public const TEMPLATE_MODULE_COMPONENT_628_REFERENCE = 'template-module-component-628';
    public const TEMPLATE_MODULE_COMPONENT_629_REFERENCE = 'template-module-component-629';
    public const TEMPLATE_MODULE_COMPONENT_630_REFERENCE = 'template-module-component-630';
    public const TEMPLATE_MODULE_COMPONENT_631_REFERENCE = 'template-module-component-631';
    public const TEMPLATE_MODULE_COMPONENT_632_REFERENCE = 'template-module-component-632';
    public const TEMPLATE_MODULE_COMPONENT_633_REFERENCE = 'template-module-component-633';
    public const TEMPLATE_MODULE_COMPONENT_634_REFERENCE = 'template-module-component-634';
    public const TEMPLATE_MODULE_COMPONENT_635_REFERENCE = 'template-module-component-635';
    public const TEMPLATE_MODULE_COMPONENT_636_REFERENCE = 'template-module-component-636';
    public const TEMPLATE_MODULE_COMPONENT_637_REFERENCE = 'template-module-component-637';
    public const TEMPLATE_MODULE_COMPONENT_638_REFERENCE = 'template-module-component-638';
    public const TEMPLATE_MODULE_COMPONENT_639_REFERENCE = 'template-module-component-639';
    public const TEMPLATE_MODULE_COMPONENT_640_REFERENCE = 'template-module-component-640';
    public const TEMPLATE_MODULE_COMPONENT_641_REFERENCE = 'template-module-component-641';
    public const TEMPLATE_MODULE_COMPONENT_642_REFERENCE = 'template-module-component-642';
    public const TEMPLATE_MODULE_COMPONENT_643_REFERENCE = 'template-module-component-643';
    public const TEMPLATE_MODULE_COMPONENT_644_REFERENCE = 'template-module-component-644';
    public const TEMPLATE_MODULE_COMPONENT_645_REFERENCE = 'template-module-component-645';
    public const TEMPLATE_MODULE_COMPONENT_646_REFERENCE = 'template-module-component-646';
    public const TEMPLATE_MODULE_COMPONENT_647_REFERENCE = 'template-module-component-647';
    public const TEMPLATE_MODULE_COMPONENT_648_REFERENCE = 'template-module-component-648';
    public const TEMPLATE_MODULE_COMPONENT_649_REFERENCE = 'template-module-component-649';
    public const TEMPLATE_MODULE_COMPONENT_650_REFERENCE = 'template-module-component-650';
    public const TEMPLATE_MODULE_COMPONENT_651_REFERENCE = 'template-module-component-651';
    public const TEMPLATE_MODULE_COMPONENT_652_REFERENCE = 'template-module-component-652';
    public const TEMPLATE_MODULE_COMPONENT_653_REFERENCE = 'template-module-component-653';
    public const TEMPLATE_MODULE_COMPONENT_654_REFERENCE = 'template-module-component-654';
    public const TEMPLATE_MODULE_COMPONENT_655_REFERENCE = 'template-module-component-655';
    public const TEMPLATE_MODULE_COMPONENT_656_REFERENCE = 'template-module-component-656';
    public const TEMPLATE_MODULE_COMPONENT_657_REFERENCE = 'template-module-component-657';
    public const TEMPLATE_MODULE_COMPONENT_658_REFERENCE = 'template-module-component-658';
    public const TEMPLATE_MODULE_COMPONENT_659_REFERENCE = 'template-module-component-659';
    public const TEMPLATE_MODULE_COMPONENT_660_REFERENCE = 'template-module-component-660';
    public const TEMPLATE_MODULE_COMPONENT_661_REFERENCE = 'template-module-component-661';
    public const TEMPLATE_MODULE_COMPONENT_662_REFERENCE = 'template-module-component-662';
    public const TEMPLATE_MODULE_COMPONENT_663_REFERENCE = 'template-module-component-663';
    public const TEMPLATE_MODULE_COMPONENT_664_REFERENCE = 'template-module-component-664';
    public const TEMPLATE_MODULE_COMPONENT_665_REFERENCE = 'template-module-component-665';
    public const TEMPLATE_MODULE_COMPONENT_666_REFERENCE = 'template-module-component-666';
    public const TEMPLATE_MODULE_COMPONENT_667_REFERENCE = 'template-module-component-667';
    public const TEMPLATE_MODULE_COMPONENT_668_REFERENCE = 'template-module-component-668';
    public const TEMPLATE_MODULE_COMPONENT_669_REFERENCE = 'template-module-component-669';
    public const TEMPLATE_MODULE_COMPONENT_670_REFERENCE = 'template-module-component-670';
    public const TEMPLATE_MODULE_COMPONENT_671_REFERENCE = 'template-module-component-671';
    public const TEMPLATE_MODULE_COMPONENT_672_REFERENCE = 'template-module-component-672';
    public const TEMPLATE_MODULE_COMPONENT_673_REFERENCE = 'template-module-component-673';
    public const TEMPLATE_MODULE_COMPONENT_674_REFERENCE = 'template-module-component-674';
    public const TEMPLATE_MODULE_COMPONENT_675_REFERENCE = 'template-module-component-675';
    public const TEMPLATE_MODULE_COMPONENT_676_REFERENCE = 'template-module-component-676';
    public const TEMPLATE_MODULE_COMPONENT_677_REFERENCE = 'template-module-component-677';
    public const TEMPLATE_MODULE_COMPONENT_678_REFERENCE = 'template-module-component-678';
    public const TEMPLATE_MODULE_COMPONENT_679_REFERENCE = 'template-module-component-679';
    public const TEMPLATE_MODULE_COMPONENT_680_REFERENCE = 'template-module-component-680';
    public const TEMPLATE_MODULE_COMPONENT_681_REFERENCE = 'template-module-component-681';
    public const TEMPLATE_MODULE_COMPONENT_682_REFERENCE = 'template-module-component-682';
    public const TEMPLATE_MODULE_COMPONENT_683_REFERENCE = 'template-module-component-683';
    public const TEMPLATE_MODULE_COMPONENT_684_REFERENCE = 'template-module-component-684';
    public const TEMPLATE_MODULE_COMPONENT_685_REFERENCE = 'template-module-component-685';
    public const TEMPLATE_MODULE_COMPONENT_686_REFERENCE = 'template-module-component-686';
    public const TEMPLATE_MODULE_COMPONENT_687_REFERENCE = 'template-module-component-687';
    public const TEMPLATE_MODULE_COMPONENT_688_REFERENCE = 'template-module-component-688';
    public const TEMPLATE_MODULE_COMPONENT_689_REFERENCE = 'template-module-component-689';
    public const TEMPLATE_MODULE_COMPONENT_690_REFERENCE = 'template-module-component-690';
    public const TEMPLATE_MODULE_COMPONENT_691_REFERENCE = 'template-module-component-691';
    public const TEMPLATE_MODULE_COMPONENT_692_REFERENCE = 'template-module-component-692';
    public const TEMPLATE_MODULE_COMPONENT_693_REFERENCE = 'template-module-component-693';
    public const TEMPLATE_MODULE_COMPONENT_694_REFERENCE = 'template-module-component-694';
    public const TEMPLATE_MODULE_COMPONENT_695_REFERENCE = 'template-module-component-695';
    public const TEMPLATE_MODULE_COMPONENT_696_REFERENCE = 'template-module-component-696';
    public const TEMPLATE_MODULE_COMPONENT_697_REFERENCE = 'template-module-component-697';
    public const TEMPLATE_MODULE_COMPONENT_698_REFERENCE = 'template-module-component-698';
    public const TEMPLATE_MODULE_COMPONENT_699_REFERENCE = 'template-module-component-699';
    public const TEMPLATE_MODULE_COMPONENT_700_REFERENCE = 'template-module-component-700';
    public const TEMPLATE_MODULE_COMPONENT_701_REFERENCE = 'template-module-component-701';
    public const TEMPLATE_MODULE_COMPONENT_702_REFERENCE = 'template-module-component-702';
    public const TEMPLATE_MODULE_COMPONENT_703_REFERENCE = 'template-module-component-703';
    public const TEMPLATE_MODULE_COMPONENT_704_REFERENCE = 'template-module-component-704';
    public const TEMPLATE_MODULE_COMPONENT_705_REFERENCE = 'template-module-component-705';
    public const TEMPLATE_MODULE_COMPONENT_706_REFERENCE = 'template-module-component-706';
    public const TEMPLATE_MODULE_COMPONENT_707_REFERENCE = 'template-module-component-707';
    public const TEMPLATE_MODULE_COMPONENT_708_REFERENCE = 'template-module-component-708';
    public const TEMPLATE_MODULE_COMPONENT_709_REFERENCE = 'template-module-component-709';
    public const TEMPLATE_MODULE_COMPONENT_710_REFERENCE = 'template-module-component-710';
    public const TEMPLATE_MODULE_COMPONENT_711_REFERENCE = 'template-module-component-711';
    public const TEMPLATE_MODULE_COMPONENT_712_REFERENCE = 'template-module-component-712';
    public const TEMPLATE_MODULE_COMPONENT_713_REFERENCE = 'template-module-component-713';
    public const TEMPLATE_MODULE_COMPONENT_714_REFERENCE = 'template-module-component-714';
    public const TEMPLATE_MODULE_COMPONENT_715_REFERENCE = 'template-module-component-715';
    public const TEMPLATE_MODULE_COMPONENT_716_REFERENCE = 'template-module-component-716';
    public const TEMPLATE_MODULE_COMPONENT_717_REFERENCE = 'template-module-component-717';
    public const TEMPLATE_MODULE_COMPONENT_718_REFERENCE = 'template-module-component-718';
    public const TEMPLATE_MODULE_COMPONENT_719_REFERENCE = 'template-module-component-719';
    public const TEMPLATE_MODULE_COMPONENT_720_REFERENCE = 'template-module-component-720';
    public const TEMPLATE_MODULE_COMPONENT_721_REFERENCE = 'template-module-component-721';
    public const TEMPLATE_MODULE_COMPONENT_722_REFERENCE = 'template-module-component-722';
    public const TEMPLATE_MODULE_COMPONENT_723_REFERENCE = 'template-module-component-723';
    public const TEMPLATE_MODULE_COMPONENT_724_REFERENCE = 'template-module-component-724';
    public const TEMPLATE_MODULE_COMPONENT_725_REFERENCE = 'template-module-component-725';
    public const TEMPLATE_MODULE_COMPONENT_726_REFERENCE = 'template-module-component-726';
    public const TEMPLATE_MODULE_COMPONENT_727_REFERENCE = 'template-module-component-727';
    public const TEMPLATE_MODULE_COMPONENT_728_REFERENCE = 'template-module-component-728';
    public const TEMPLATE_MODULE_COMPONENT_729_REFERENCE = 'template-module-component-729';
    public const TEMPLATE_MODULE_COMPONENT_730_REFERENCE = 'template-module-component-730';
    public const TEMPLATE_MODULE_COMPONENT_731_REFERENCE = 'template-module-component-731';
    public const TEMPLATE_MODULE_COMPONENT_732_REFERENCE = 'template-module-component-732';
    public const TEMPLATE_MODULE_COMPONENT_733_REFERENCE = 'template-module-component-733';
    public const TEMPLATE_MODULE_COMPONENT_734_REFERENCE = 'template-module-component-734';
    public const TEMPLATE_MODULE_COMPONENT_735_REFERENCE = 'template-module-component-735';
    public const TEMPLATE_MODULE_COMPONENT_736_REFERENCE = 'template-module-component-736';
    public const TEMPLATE_MODULE_COMPONENT_737_REFERENCE = 'template-module-component-737';
    public const TEMPLATE_MODULE_COMPONENT_738_REFERENCE = 'template-module-component-738';
    public const TEMPLATE_MODULE_COMPONENT_739_REFERENCE = 'template-module-component-739';
    public const TEMPLATE_MODULE_COMPONENT_740_REFERENCE = 'template-module-component-740';
    public const TEMPLATE_MODULE_COMPONENT_741_REFERENCE = 'template-module-component-741';
    public const TEMPLATE_MODULE_COMPONENT_742_REFERENCE = 'template-module-component-742';
    public const TEMPLATE_MODULE_COMPONENT_743_REFERENCE = 'template-module-component-743';
    public const TEMPLATE_MODULE_COMPONENT_744_REFERENCE = 'template-module-component-744';
    public const TEMPLATE_MODULE_COMPONENT_745_REFERENCE = 'template-module-component-745';
    public const TEMPLATE_MODULE_COMPONENT_746_REFERENCE = 'template-module-component-746';
    public const TEMPLATE_MODULE_COMPONENT_747_REFERENCE = 'template-module-component-747';
    public const TEMPLATE_MODULE_COMPONENT_748_REFERENCE = 'template-module-component-748';
    public const TEMPLATE_MODULE_COMPONENT_749_REFERENCE = 'template-module-component-749';
    public const TEMPLATE_MODULE_COMPONENT_750_REFERENCE = 'template-module-component-750';
    public const TEMPLATE_MODULE_COMPONENT_751_REFERENCE = 'template-module-component-751';
    public const TEMPLATE_MODULE_COMPONENT_752_REFERENCE = 'template-module-component-752';
    public const TEMPLATE_MODULE_COMPONENT_753_REFERENCE = 'template-module-component-753';
    public const TEMPLATE_MODULE_COMPONENT_754_REFERENCE = 'template-module-component-754';
    public const TEMPLATE_MODULE_COMPONENT_755_REFERENCE = 'template-module-component-755';
    public const TEMPLATE_MODULE_COMPONENT_756_REFERENCE = 'template-module-component-756';
    public const TEMPLATE_MODULE_COMPONENT_757_REFERENCE = 'template-module-component-757';
    public const TEMPLATE_MODULE_COMPONENT_758_REFERENCE = 'template-module-component-758';
    public const TEMPLATE_MODULE_COMPONENT_759_REFERENCE = 'template-module-component-759';
    public const TEMPLATE_MODULE_COMPONENT_760_REFERENCE = 'template-module-component-760';
    public const TEMPLATE_MODULE_COMPONENT_761_REFERENCE = 'template-module-component-761';
    public const TEMPLATE_MODULE_COMPONENT_762_REFERENCE = 'template-module-component-762';
    public const TEMPLATE_MODULE_COMPONENT_763_REFERENCE = 'template-module-component-763';
    public const TEMPLATE_MODULE_COMPONENT_764_REFERENCE = 'template-module-component-764';
    public const TEMPLATE_MODULE_COMPONENT_765_REFERENCE = 'template-module-component-765';
    public const TEMPLATE_MODULE_COMPONENT_766_REFERENCE = 'template-module-component-766';
    public const TEMPLATE_MODULE_COMPONENT_767_REFERENCE = 'template-module-component-767';
    public const TEMPLATE_MODULE_COMPONENT_768_REFERENCE = 'template-module-component-768';
    public const TEMPLATE_MODULE_COMPONENT_769_REFERENCE = 'template-module-component-769';
    public const TEMPLATE_MODULE_COMPONENT_770_REFERENCE = 'template-module-component-770';
    public const TEMPLATE_MODULE_COMPONENT_771_REFERENCE = 'template-module-component-771';
    public const TEMPLATE_MODULE_COMPONENT_772_REFERENCE = 'template-module-component-772';
    public const TEMPLATE_MODULE_COMPONENT_773_REFERENCE = 'template-module-component-773';
    public const TEMPLATE_MODULE_COMPONENT_774_REFERENCE = 'template-module-component-774';
    public const TEMPLATE_MODULE_COMPONENT_775_REFERENCE = 'template-module-component-775';
    public const TEMPLATE_MODULE_COMPONENT_776_REFERENCE = 'template-module-component-776';
    public const TEMPLATE_MODULE_COMPONENT_777_REFERENCE = 'template-module-component-777';
    public const TEMPLATE_MODULE_COMPONENT_778_REFERENCE = 'template-module-component-778';
    public const TEMPLATE_MODULE_COMPONENT_779_REFERENCE = 'template-module-component-779';
    public const TEMPLATE_MODULE_COMPONENT_780_REFERENCE = 'template-module-component-780';
    public const TEMPLATE_MODULE_COMPONENT_781_REFERENCE = 'template-module-component-781';
    public const TEMPLATE_MODULE_COMPONENT_782_REFERENCE = 'template-module-component-782';
    public const TEMPLATE_MODULE_COMPONENT_783_REFERENCE = 'template-module-component-783';
    public const TEMPLATE_MODULE_COMPONENT_784_REFERENCE = 'template-module-component-784';
    public const TEMPLATE_MODULE_COMPONENT_785_REFERENCE = 'template-module-component-785';
    public const TEMPLATE_MODULE_COMPONENT_786_REFERENCE = 'template-module-component-786';
    public const TEMPLATE_MODULE_COMPONENT_787_REFERENCE = 'template-module-component-787';
    public const TEMPLATE_MODULE_COMPONENT_788_REFERENCE = 'template-module-component-788';
    public const TEMPLATE_MODULE_COMPONENT_789_REFERENCE = 'template-module-component-789';
    public const TEMPLATE_MODULE_COMPONENT_790_REFERENCE = 'template-module-component-790';
    public const TEMPLATE_MODULE_COMPONENT_791_REFERENCE = 'template-module-component-791';
    public const TEMPLATE_MODULE_COMPONENT_792_REFERENCE = 'template-module-component-792';
    public const TEMPLATE_MODULE_COMPONENT_793_REFERENCE = 'template-module-component-793';
    public const TEMPLATE_MODULE_COMPONENT_794_REFERENCE = 'template-module-component-794';
    public const TEMPLATE_MODULE_COMPONENT_795_REFERENCE = 'template-module-component-795';
    public const TEMPLATE_MODULE_COMPONENT_796_REFERENCE = 'template-module-component-796';
    public const TEMPLATE_MODULE_COMPONENT_797_REFERENCE = 'template-module-component-797';
    public const TEMPLATE_MODULE_COMPONENT_798_REFERENCE = 'template-module-component-798';
    public const TEMPLATE_MODULE_COMPONENT_799_REFERENCE = 'template-module-component-799';
    public const TEMPLATE_MODULE_COMPONENT_800_REFERENCE = 'template-module-component-800';
    public const TEMPLATE_MODULE_COMPONENT_801_REFERENCE = 'template-module-component-801';
    public const TEMPLATE_MODULE_COMPONENT_802_REFERENCE = 'template-module-component-802';
    public const TEMPLATE_MODULE_COMPONENT_803_REFERENCE = 'template-module-component-803';
    public const TEMPLATE_MODULE_COMPONENT_804_REFERENCE = 'template-module-component-804';
    public const TEMPLATE_MODULE_COMPONENT_805_REFERENCE = 'template-module-component-805';
    public const TEMPLATE_MODULE_COMPONENT_806_REFERENCE = 'template-module-component-806';
    public const TEMPLATE_MODULE_COMPONENT_807_REFERENCE = 'template-module-component-807';
    public const TEMPLATE_MODULE_COMPONENT_808_REFERENCE = 'template-module-component-808';
    public const TEMPLATE_MODULE_COMPONENT_809_REFERENCE = 'template-module-component-809';
    public const TEMPLATE_MODULE_COMPONENT_810_REFERENCE = 'template-module-component-810';
    public const TEMPLATE_MODULE_COMPONENT_811_REFERENCE = 'template-module-component-811';
    public const TEMPLATE_MODULE_COMPONENT_812_REFERENCE = 'template-module-component-812';
    public const TEMPLATE_MODULE_COMPONENT_813_REFERENCE = 'template-module-component-813';
    public const TEMPLATE_MODULE_COMPONENT_814_REFERENCE = 'template-module-component-814';
    public const TEMPLATE_MODULE_COMPONENT_815_REFERENCE = 'template-module-component-815';
    public const TEMPLATE_MODULE_COMPONENT_816_REFERENCE = 'template-module-component-816';
    public const TEMPLATE_MODULE_COMPONENT_817_REFERENCE = 'template-module-component-817';
    public const TEMPLATE_MODULE_COMPONENT_818_REFERENCE = 'template-module-component-818';
    public const TEMPLATE_MODULE_COMPONENT_819_REFERENCE = 'template-module-component-819';
    public const TEMPLATE_MODULE_COMPONENT_820_REFERENCE = 'template-module-component-820';
    public const TEMPLATE_MODULE_COMPONENT_821_REFERENCE = 'template-module-component-821';
    public const TEMPLATE_MODULE_COMPONENT_822_REFERENCE = 'template-module-component-822';
    public const TEMPLATE_MODULE_COMPONENT_823_REFERENCE = 'template-module-component-823';
    public const TEMPLATE_MODULE_COMPONENT_824_REFERENCE = 'template-module-component-824';
    public const TEMPLATE_MODULE_COMPONENT_825_REFERENCE = 'template-module-component-825';
    public const TEMPLATE_MODULE_COMPONENT_826_REFERENCE = 'template-module-component-826';
    public const TEMPLATE_MODULE_COMPONENT_827_REFERENCE = 'template-module-component-827';
    public const TEMPLATE_MODULE_COMPONENT_828_REFERENCE = 'template-module-component-828';
    public const TEMPLATE_MODULE_COMPONENT_829_REFERENCE = 'template-module-component-829';
    public const TEMPLATE_MODULE_COMPONENT_830_REFERENCE = 'template-module-component-830';
    public const TEMPLATE_MODULE_COMPONENT_831_REFERENCE = 'template-module-component-831';
    public const TEMPLATE_MODULE_COMPONENT_832_REFERENCE = 'template-module-component-832';
    public const TEMPLATE_MODULE_COMPONENT_833_REFERENCE = 'template-module-component-833';
    public const TEMPLATE_MODULE_COMPONENT_834_REFERENCE = 'template-module-component-834';
    public const TEMPLATE_MODULE_COMPONENT_835_REFERENCE = 'template-module-component-835';
    public const TEMPLATE_MODULE_COMPONENT_836_REFERENCE = 'template-module-component-836';
    public const TEMPLATE_MODULE_COMPONENT_837_REFERENCE = 'template-module-component-837';
    public const TEMPLATE_MODULE_COMPONENT_838_REFERENCE = 'template-module-component-838';
    public const TEMPLATE_MODULE_COMPONENT_839_REFERENCE = 'template-module-component-839';
    public const TEMPLATE_MODULE_COMPONENT_840_REFERENCE = 'template-module-component-840';
    public const TEMPLATE_MODULE_COMPONENT_841_REFERENCE = 'template-module-component-841';
    public const TEMPLATE_MODULE_COMPONENT_842_REFERENCE = 'template-module-component-842';
    public const TEMPLATE_MODULE_COMPONENT_843_REFERENCE = 'template-module-component-843';
    public const TEMPLATE_MODULE_COMPONENT_844_REFERENCE = 'template-module-component-844';
    public const TEMPLATE_MODULE_COMPONENT_845_REFERENCE = 'template-module-component-845';
    public const TEMPLATE_MODULE_COMPONENT_846_REFERENCE = 'template-module-component-846';
    public const TEMPLATE_MODULE_COMPONENT_847_REFERENCE = 'template-module-component-847';
    public const TEMPLATE_MODULE_COMPONENT_848_REFERENCE = 'template-module-component-848';
    public const TEMPLATE_MODULE_COMPONENT_849_REFERENCE = 'template-module-component-849';
    public const TEMPLATE_MODULE_COMPONENT_850_REFERENCE = 'template-module-component-850';
    public const TEMPLATE_MODULE_COMPONENT_851_REFERENCE = 'template-module-component-851';
    public const TEMPLATE_MODULE_COMPONENT_852_REFERENCE = 'template-module-component-852';
    public const TEMPLATE_MODULE_COMPONENT_853_REFERENCE = 'template-module-component-853';
    public const TEMPLATE_MODULE_COMPONENT_854_REFERENCE = 'template-module-component-854';
    public const TEMPLATE_MODULE_COMPONENT_855_REFERENCE = 'template-module-component-855';
    public const TEMPLATE_MODULE_COMPONENT_856_REFERENCE = 'template-module-component-856';
    public const TEMPLATE_MODULE_COMPONENT_857_REFERENCE = 'template-module-component-857';
    public const TEMPLATE_MODULE_COMPONENT_858_REFERENCE = 'template-module-component-858';
    public const TEMPLATE_MODULE_COMPONENT_859_REFERENCE = 'template-module-component-859';
    public const TEMPLATE_MODULE_COMPONENT_860_REFERENCE = 'template-module-component-860';
    public const TEMPLATE_MODULE_COMPONENT_861_REFERENCE = 'template-module-component-861';
    public const TEMPLATE_MODULE_COMPONENT_862_REFERENCE = 'template-module-component-862';
    public const TEMPLATE_MODULE_COMPONENT_863_REFERENCE = 'template-module-component-863';
    public const TEMPLATE_MODULE_COMPONENT_864_REFERENCE = 'template-module-component-864';
    public const TEMPLATE_MODULE_COMPONENT_865_REFERENCE = 'template-module-component-865';
    public const TEMPLATE_MODULE_COMPONENT_866_REFERENCE = 'template-module-component-866';
    public const TEMPLATE_MODULE_COMPONENT_867_REFERENCE = 'template-module-component-867';
    public const TEMPLATE_MODULE_COMPONENT_868_REFERENCE = 'template-module-component-868';
    public const TEMPLATE_MODULE_COMPONENT_869_REFERENCE = 'template-module-component-869';
    public const TEMPLATE_MODULE_COMPONENT_870_REFERENCE = 'template-module-component-870';
    public const TEMPLATE_MODULE_COMPONENT_871_REFERENCE = 'template-module-component-871';
    public const TEMPLATE_MODULE_COMPONENT_872_REFERENCE = 'template-module-component-872';
    public const TEMPLATE_MODULE_COMPONENT_873_REFERENCE = 'template-module-component-873';
    public const TEMPLATE_MODULE_COMPONENT_874_REFERENCE = 'template-module-component-874';
    public const TEMPLATE_MODULE_COMPONENT_875_REFERENCE = 'template-module-component-875';
    public const TEMPLATE_MODULE_COMPONENT_876_REFERENCE = 'template-module-component-876';
    public const TEMPLATE_MODULE_COMPONENT_877_REFERENCE = 'template-module-component-877';
    public const TEMPLATE_MODULE_COMPONENT_878_REFERENCE = 'template-module-component-878';
    public const TEMPLATE_MODULE_COMPONENT_879_REFERENCE = 'template-module-component-879';
    public const TEMPLATE_MODULE_COMPONENT_880_REFERENCE = 'template-module-component-880';
    public const TEMPLATE_MODULE_COMPONENT_881_REFERENCE = 'template-module-component-881';
    public const TEMPLATE_MODULE_COMPONENT_882_REFERENCE = 'template-module-component-882';
    public const TEMPLATE_MODULE_COMPONENT_883_REFERENCE = 'template-module-component-883';
    public const TEMPLATE_MODULE_COMPONENT_884_REFERENCE = 'template-module-component-884';
    public const TEMPLATE_MODULE_COMPONENT_885_REFERENCE = 'template-module-component-885';
    public const TEMPLATE_MODULE_COMPONENT_886_REFERENCE = 'template-module-component-886';
    public const TEMPLATE_MODULE_COMPONENT_887_REFERENCE = 'template-module-component-887';
    public const TEMPLATE_MODULE_COMPONENT_888_REFERENCE = 'template-module-component-888';
    public const TEMPLATE_MODULE_COMPONENT_889_REFERENCE = 'template-module-component-889';
    public const TEMPLATE_MODULE_COMPONENT_890_REFERENCE = 'template-module-component-890';
    public const TEMPLATE_MODULE_COMPONENT_891_REFERENCE = 'template-module-component-891';
    public const TEMPLATE_MODULE_COMPONENT_892_REFERENCE = 'template-module-component-892';
    public const TEMPLATE_MODULE_COMPONENT_893_REFERENCE = 'template-module-component-893';
    public const TEMPLATE_MODULE_COMPONENT_894_REFERENCE = 'template-module-component-894';
    public const TEMPLATE_MODULE_COMPONENT_895_REFERENCE = 'template-module-component-895';
    public const TEMPLATE_MODULE_COMPONENT_896_REFERENCE = 'template-module-component-896';
    public const TEMPLATE_MODULE_COMPONENT_897_REFERENCE = 'template-module-component-897';
    public const TEMPLATE_MODULE_COMPONENT_898_REFERENCE = 'template-module-component-898';
    public const TEMPLATE_MODULE_COMPONENT_899_REFERENCE = 'template-module-component-899';
    public const TEMPLATE_MODULE_COMPONENT_900_REFERENCE = 'template-module-component-900';
    public const TEMPLATE_MODULE_COMPONENT_901_REFERENCE = 'template-module-component-901';
    public const TEMPLATE_MODULE_COMPONENT_902_REFERENCE = 'template-module-component-902';
    public const TEMPLATE_MODULE_COMPONENT_903_REFERENCE = 'template-module-component-903';
    public const TEMPLATE_MODULE_COMPONENT_904_REFERENCE = 'template-module-component-904';
    public const TEMPLATE_MODULE_COMPONENT_905_REFERENCE = 'template-module-component-905';
    public const TEMPLATE_MODULE_COMPONENT_906_REFERENCE = 'template-module-component-906';
    public const TEMPLATE_MODULE_COMPONENT_907_REFERENCE = 'template-module-component-907';
    public const TEMPLATE_MODULE_COMPONENT_908_REFERENCE = 'template-module-component-908';
    public const TEMPLATE_MODULE_COMPONENT_909_REFERENCE = 'template-module-component-909';
    public const TEMPLATE_MODULE_COMPONENT_910_REFERENCE = 'template-module-component-910';
    public const TEMPLATE_MODULE_COMPONENT_911_REFERENCE = 'template-module-component-911';
    public const TEMPLATE_MODULE_COMPONENT_912_REFERENCE = 'template-module-component-912';
    public const TEMPLATE_MODULE_COMPONENT_913_REFERENCE = 'template-module-component-913';
    public const TEMPLATE_MODULE_COMPONENT_914_REFERENCE = 'template-module-component-914';
    public const TEMPLATE_MODULE_COMPONENT_915_REFERENCE = 'template-module-component-915';
    public const TEMPLATE_MODULE_COMPONENT_916_REFERENCE = 'template-module-component-916';
    public const TEMPLATE_MODULE_COMPONENT_917_REFERENCE = 'template-module-component-917';
    public const TEMPLATE_MODULE_COMPONENT_918_REFERENCE = 'template-module-component-918';
    public const TEMPLATE_MODULE_COMPONENT_919_REFERENCE = 'template-module-component-919';
    public const TEMPLATE_MODULE_COMPONENT_920_REFERENCE = 'template-module-component-920';
    public const TEMPLATE_MODULE_COMPONENT_921_REFERENCE = 'template-module-component-921';
    public const TEMPLATE_MODULE_COMPONENT_922_REFERENCE = 'template-module-component-922';
    public const TEMPLATE_MODULE_COMPONENT_923_REFERENCE = 'template-module-component-923';
    public const TEMPLATE_MODULE_COMPONENT_924_REFERENCE = 'template-module-component-924';
    public const TEMPLATE_MODULE_COMPONENT_925_REFERENCE = 'template-module-component-925';
    public const TEMPLATE_MODULE_COMPONENT_926_REFERENCE = 'template-module-component-926';
    public const TEMPLATE_MODULE_COMPONENT_927_REFERENCE = 'template-module-component-927';
    public const TEMPLATE_MODULE_COMPONENT_928_REFERENCE = 'template-module-component-928';
    public const TEMPLATE_MODULE_COMPONENT_929_REFERENCE = 'template-module-component-929';
    public const TEMPLATE_MODULE_COMPONENT_930_REFERENCE = 'template-module-component-930';
    public const TEMPLATE_MODULE_COMPONENT_931_REFERENCE = 'template-module-component-931';
    public const TEMPLATE_MODULE_COMPONENT_932_REFERENCE = 'template-module-component-932';
    public const TEMPLATE_MODULE_COMPONENT_933_REFERENCE = 'template-module-component-933';
    public const TEMPLATE_MODULE_COMPONENT_934_REFERENCE = 'template-module-component-934';
    public const TEMPLATE_MODULE_COMPONENT_935_REFERENCE = 'template-module-component-935';
    public const TEMPLATE_MODULE_COMPONENT_936_REFERENCE = 'template-module-component-936';
    public const TEMPLATE_MODULE_COMPONENT_937_REFERENCE = 'template-module-component-937';
    public const TEMPLATE_MODULE_COMPONENT_938_REFERENCE = 'template-module-component-938';
    public const TEMPLATE_MODULE_COMPONENT_939_REFERENCE = 'template-module-component-939';
    public const TEMPLATE_MODULE_COMPONENT_940_REFERENCE = 'template-module-component-940';
    public const TEMPLATE_MODULE_COMPONENT_941_REFERENCE = 'template-module-component-941';
    public const TEMPLATE_MODULE_COMPONENT_942_REFERENCE = 'template-module-component-942';
    public const TEMPLATE_MODULE_COMPONENT_943_REFERENCE = 'template-module-component-943';
    public const TEMPLATE_MODULE_COMPONENT_944_REFERENCE = 'template-module-component-944';
    public const TEMPLATE_MODULE_COMPONENT_945_REFERENCE = 'template-module-component-945';
    public const TEMPLATE_MODULE_COMPONENT_946_REFERENCE = 'template-module-component-946';
    public const TEMPLATE_MODULE_COMPONENT_947_REFERENCE = 'template-module-component-947';
    public const TEMPLATE_MODULE_COMPONENT_948_REFERENCE = 'template-module-component-948';
    public const TEMPLATE_MODULE_COMPONENT_949_REFERENCE = 'template-module-component-949';
    public const TEMPLATE_MODULE_COMPONENT_950_REFERENCE = 'template-module-component-950';
    public const TEMPLATE_MODULE_COMPONENT_951_REFERENCE = 'template-module-component-951';
    public const TEMPLATE_MODULE_COMPONENT_952_REFERENCE = 'template-module-component-952';
    public const TEMPLATE_MODULE_COMPONENT_953_REFERENCE = 'template-module-component-953';
    public const TEMPLATE_MODULE_COMPONENT_954_REFERENCE = 'template-module-component-954';
    public const TEMPLATE_MODULE_COMPONENT_955_REFERENCE = 'template-module-component-955';
    public const TEMPLATE_MODULE_COMPONENT_956_REFERENCE = 'template-module-component-956';
    public const TEMPLATE_MODULE_COMPONENT_957_REFERENCE = 'template-module-component-957';
    public const TEMPLATE_MODULE_COMPONENT_958_REFERENCE = 'template-module-component-958';
    public const TEMPLATE_MODULE_COMPONENT_959_REFERENCE = 'template-module-component-959';
    public const TEMPLATE_MODULE_COMPONENT_960_REFERENCE = 'template-module-component-960';
    public const TEMPLATE_MODULE_COMPONENT_961_REFERENCE = 'template-module-component-961';
    public const TEMPLATE_MODULE_COMPONENT_962_REFERENCE = 'template-module-component-962';
    public const TEMPLATE_MODULE_COMPONENT_963_REFERENCE = 'template-module-component-963';
    public const TEMPLATE_MODULE_COMPONENT_964_REFERENCE = 'template-module-component-964';
    public const TEMPLATE_MODULE_COMPONENT_965_REFERENCE = 'template-module-component-965';


    public function load(ObjectManager $manager)
    {
        ///////////////////////////// TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_2_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("4")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_1_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("4")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_2_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("8")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_3_REFERENCE, $moduleComponent);

        ///////////////////////////// TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
            ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_4_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_5_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_6_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_7_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_8_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
            ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
            ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
            ->setQuantity("12")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_9_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_10_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_1_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_11_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_12_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_13_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_14_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_15_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_16_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_17_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_18_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_19_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_20_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_21_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_2_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_22_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_23_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_24_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_25_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_26_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_27_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_28_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_29_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_30_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_31_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_32_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_3_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_33_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_34_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_35_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_36_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_37_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_38_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_39_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_40_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_41_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_42_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_43_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_4_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_44_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_45_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_46_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_47_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_48_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_49_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_50_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_51_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_52_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_53_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_54_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_5_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_55_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_56_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_57_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_58_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_59_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_60_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_61_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_62_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_63_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_64_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_65_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_6_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_66_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_67_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_68_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_69_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_70_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_71_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_72_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_73_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_74_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_75_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_76_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_7_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_77_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_78_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_79_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_80_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_81_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_82_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_83_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_84_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_85_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_86_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_87_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_8_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_88_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_89_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_90_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_91_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_92_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_93_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_94_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_95_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_96_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_97_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_98_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_9_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_99_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_100_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_101_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_102_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_103_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_104_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_105_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_106_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_107_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_108_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_109_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_10_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_110_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_111_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_112_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_113_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_114_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_115_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_116_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_117_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_118_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_119_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_120_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_11_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_121_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_122_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_123_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_124_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_125_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_126_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_127_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_128_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_129_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_130_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_131_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_12_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_132_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_133_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_134_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_135_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_136_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_137_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_138_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_139_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_140_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_141_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_142_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_13_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_143_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_144_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_145_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_146_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_147_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_148_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_149_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_150_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_151_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_152_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_153_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_14_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_154_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_155_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_156_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_157_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_158_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_159_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_160_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_161_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_162_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_163_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_164_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_15_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_165_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_166_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_167_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_168_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_169_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_170_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_171_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_172_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_173_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_174_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_175_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_16_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_176_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_177_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_178_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_179_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_180_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_181_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_182_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_183_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_184_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_185_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_186_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_17_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_187_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_188_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_189_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_190_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_191_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_192_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_193_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_194_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_195_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_196_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_197_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_18_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_198_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_199_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_200_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_201_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_202_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_203_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_204_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_205_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_206_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_207_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_208_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_19_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_209_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_210_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_211_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_212_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_213_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_214_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_215_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_216_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_217_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_218_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_219_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_20_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_220_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_221_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_222_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_223_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_224_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_225_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_226_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_227_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_228_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_229_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_230_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_21_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_231_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_232_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_233_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_234_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_235_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_236_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_237_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_238_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_239_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_240_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_241_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_22_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_242_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_243_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_244_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_245_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_246_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_247_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_248_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_249_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_250_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_251_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_252_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_23_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_253_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_254_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_255_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_256_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_257_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_258_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_259_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_260_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_261_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_262_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_263_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_24_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_264_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_265_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_266_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_267_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_268_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_269_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_270_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_271_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_272_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_273_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_274_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_25_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_275_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_276_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_277_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_278_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_279_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_280_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_281_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_282_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_283_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_284_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_285_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_26_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_286_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_287_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_288_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_289_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_290_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_291_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_292_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_293_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_294_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_295_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_296_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_27_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_297_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_298_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_299_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_300_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_301_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_302_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_303_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_304_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_305_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_306_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_307_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_28_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_308_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_309_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_310_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_311_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_312_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_313_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_314_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_315_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_316_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_317_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_318_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_29_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_319_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_320_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_321_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_322_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_323_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_324_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_325_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_326_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_327_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_328_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_329_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_30_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_330_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_331_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_332_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_333_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_334_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_335_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_336_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_337_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_338_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_339_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_340_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_31_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_341_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_342_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_343_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_344_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_345_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_346_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_347_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_348_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_349_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_350_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_351_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_32_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_352_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_353_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_354_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_355_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_356_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_357_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_358_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_359_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_360_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_361_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_362_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_33_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_363_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_364_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_365_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_366_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_367_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_368_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_369_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_370_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_371_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_372_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_373_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_34_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_374_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_375_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_376_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_377_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_378_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_379_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_380_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_381_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_382_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_383_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_384_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_35_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_385_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_386_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_387_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_388_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_389_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_390_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_391_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_392_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_393_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_394_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_395_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_36_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_396_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_397_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_398_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_399_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_400_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_401_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_402_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_403_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_404_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_405_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_406_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_37_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_407_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_408_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_409_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_410_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_411_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_412_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_413_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_414_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_415_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_416_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_417_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_38_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_418_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_419_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_420_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_421_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_422_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_423_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_424_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_425_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_426_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_427_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_428_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_39_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_429_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_430_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_431_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_432_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_433_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_434_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_435_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_436_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_437_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_438_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_439_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_40_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_440_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_441_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_442_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_443_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_444_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_445_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_446_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_447_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_448_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_449_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_450_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_41_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_451_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_452_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_453_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_454_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_455_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_456_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_457_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_458_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_459_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_460_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_461_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_42_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_462_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_463_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_464_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_465_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_466_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_467_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_468_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_469_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_470_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_471_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_472_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_43_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_473_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_474_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_475_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_476_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_477_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_478_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_479_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_480_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_481_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_482_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_483_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_44_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_484_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_485_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_486_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_487_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_488_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_489_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_490_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_491_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_492_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_493_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_494_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_45_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_495_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_496_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_497_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_498_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_499_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_500_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_501_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_502_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_503_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_504_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_505_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_46_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_506_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_507_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_508_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_509_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_510_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_511_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_512_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_513_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_514_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_515_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_516_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_47_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_517_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_518_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_519_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_520_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_521_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_522_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_523_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_524_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_525_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_526_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_527_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_48_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_528_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_529_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_530_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_531_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_532_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_533_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_534_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_535_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_536_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_537_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_538_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_49_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_539_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_540_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_541_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_542_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_543_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_544_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_545_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_546_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_547_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_548_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_549_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_50_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_550_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_551_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_552_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_553_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_554_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_555_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_556_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_557_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_558_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_559_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_560_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_51_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_561_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_562_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_563_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_564_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_565_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_566_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_567_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_568_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_569_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_570_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_571_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_52_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_572_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_573_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_574_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_575_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_576_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_577_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_578_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_579_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_580_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_581_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_582_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_53_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_583_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_584_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_585_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_586_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_587_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_588_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_589_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_590_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_591_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_592_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_593_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_54_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_594_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_595_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_596_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_597_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_598_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_599_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_600_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_601_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_602_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_603_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_604_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_55_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_605_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_606_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_607_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_608_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_609_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_610_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_611_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_612_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_613_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_614_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_615_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_56_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_616_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_617_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_618_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_619_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_620_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_621_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_622_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_623_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_624_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_625_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_626_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_57_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_627_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_628_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_629_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_630_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_631_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_632_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_633_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_634_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_635_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_636_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_637_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_58_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_638_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_639_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_640_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_641_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_642_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_643_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_644_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_645_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_646_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_647_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_648_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_59_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_649_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_650_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_651_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_652_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_653_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_654_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_655_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_656_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_657_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_658_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_659_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_60_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_660_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_661_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_662_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_663_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_664_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_665_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_666_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_667_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_668_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_669_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_670_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_61_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_671_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_672_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_673_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_674_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_675_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_676_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_677_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_678_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_679_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_680_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_681_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_62_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_682_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_683_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_684_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_685_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_686_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_687_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_688_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_689_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_690_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_691_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_692_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_63_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_693_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_694_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_695_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_696_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_697_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_698_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_699_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_700_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_701_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_702_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_703_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_64_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_704_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_705_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_706_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_707_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_708_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_709_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_710_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_711_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_712_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_713_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_714_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_65_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_715_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_716_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_717_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_718_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_719_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_720_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_721_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_722_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_723_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_724_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_725_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_66_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_726_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_727_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_728_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_729_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_730_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_731_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_732_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_733_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_734_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_735_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_736_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_67_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_737_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_738_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_739_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_740_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_741_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_742_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_743_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_744_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_745_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_746_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_747_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_68_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_748_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_749_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_750_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_751_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_752_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_753_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_754_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_755_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_756_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_757_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_758_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_69_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_759_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_760_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_761_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_762_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_763_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_764_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_765_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_766_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_767_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_768_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_769_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_70_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_770_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_771_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_772_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_773_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_774_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_775_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_776_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_777_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_778_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_779_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_780_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_71_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_781_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_782_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_783_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_784_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_785_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_786_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_787_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_788_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_789_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_790_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_791_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_72_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_792_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_793_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_794_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_795_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_796_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_797_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_798_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_799_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_800_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_801_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_802_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_73_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_803_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_1_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_804_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_6_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_805_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_10_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_806_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_11_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_807_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_13_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_808_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_17_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_809_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_19_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_810_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_21_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("5")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_811_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_22_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("3")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_812_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_24_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_813_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_29_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_74_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_814_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_75_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_815_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_75_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_816_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_76_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_817_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_76_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_818_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_77_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_819_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_77_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_820_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_78_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_821_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_78_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_822_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_79_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_823_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_79_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_824_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_80_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_825_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_80_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_826_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_81_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_827_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_81_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_828_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_82_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_829_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_82_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_830_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_83_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_831_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_83_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_832_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_84_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_833_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_84_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_834_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_85_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_835_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_85_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_836_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_86_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_837_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_86_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_838_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_87_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_839_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_87_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_840_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_88_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_841_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_88_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_842_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_89_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_843_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_89_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_844_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_90_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_845_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_90_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_846_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_91_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_847_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_91_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_848_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_92_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_849_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_92_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_850_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_93_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_851_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_93_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_852_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_94_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_853_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_94_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_854_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_95_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_855_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_95_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_856_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_96_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_857_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_96_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_858_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_97_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_859_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_97_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_860_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_98_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_861_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_98_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_862_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_99_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_863_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_99_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_864_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_100_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_865_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_100_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_866_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_101_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_867_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_101_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_868_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_102_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_869_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_102_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_870_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_103_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_871_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_103_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_872_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_104_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_873_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_104_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_874_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_105_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_875_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_105_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_876_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_106_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_877_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_106_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_878_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_107_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_879_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_107_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_880_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_108_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_881_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_108_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_882_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_109_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_883_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_109_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_884_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_110_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_885_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_110_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_886_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_111_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_887_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_111_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_888_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_112_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_889_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_112_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_890_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_113_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_891_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_113_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_892_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_114_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_893_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_114_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_894_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_115_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_895_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_115_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_896_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_116_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_897_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_116_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_898_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_117_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_899_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_117_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_900_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_118_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_901_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_118_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_902_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_119_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_903_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_119_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_904_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_120_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_905_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_120_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_906_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_121_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_907_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_121_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_908_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_122_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_909_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_122_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_910_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_123_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_911_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_123_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_912_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_124_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_913_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_124_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_914_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_125_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_915_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_125_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_916_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_126_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_917_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_126_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_918_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_127_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_919_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_127_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_920_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_128_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_921_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_128_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_922_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_129_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_923_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_129_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_924_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_130_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_925_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_130_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_926_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_131_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_927_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_131_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_928_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_132_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_929_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_132_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_930_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_133_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_931_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_133_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_932_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_134_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_933_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_134_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_934_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_135_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_935_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_135_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_936_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_136_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_937_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_136_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_938_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_137_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_939_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_137_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_940_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_138_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_941_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_138_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_942_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_139_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_943_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_139_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_944_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_140_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_945_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_140_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_946_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_141_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_947_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_141_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_948_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_142_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_949_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_142_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_950_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_143_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_951_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_143_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_952_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_144_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_953_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_144_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_954_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_145_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_955_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_145_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_956_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_146_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_957_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_146_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_958_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_147_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_959_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_147_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_960_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_31_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_148_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_961_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_35_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_148_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_962_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_37_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_149_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_963_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_38_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_150_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_964_REFERENCE, $moduleComponent);

        $moduleComponent = new TemplateModuleComponent();
        $moduleComponent
             ->setComponent($this->getReference(ComponentFixtures::COMPONENT_39_REFERENCE))
             ->setTemplateModule($this->getReference(TemplateModuleFixtures::TEMPLATE_MODULE_MUR_INTERIEUR_151_REFERENCE))
             ->setQuantity("1")
        ;
        $manager->persist($moduleComponent);
        $this->addReference(self::TEMPLATE_MODULE_COMPONENT_965_REFERENCE, $moduleComponent);



        ////////////////////////////////
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ComponentFixtures::class,
            TemplateModuleFixtures::class
        ];
    }
}
