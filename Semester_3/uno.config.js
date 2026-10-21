import {
    defineConfig,
    presetIcons,
    presetWind4,
    transformerDirectives,
} from "unocss";
import { extractorArbitraryVariants } from "@unocss/extractor-arbitrary-variants";

export default defineConfig({
    extractors: [extractorArbitraryVariants()],
    presets: [
        presetIcons({
            scale: 2,
            extraProperties: {
                display: "inline-block",
                "vertical-align": "middle",
            },
        }),
        presetWind4(),
    ],
    transformers: [transformerDirectives()],
});
