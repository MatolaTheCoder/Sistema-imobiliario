<template>
    <div class="bg-gray-100 w-full h-screen flex items-center justify-center">
        <div class=" w-1/2 bg-white px-8 py-8 rounded-lg shadow-md ">
            <div class="w-full flex justify-center">
                <h2 class="text-2xl font-semibold mb-4">Cadastro de Imóvel</h2>
            </div>
            <form @submit.prevent="submit" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div v-for="field in fields" :key="field.name" class="flex flex-col">
                        <label :for="field.name" class="text-sm font-semibold text-gray-600">
                            {{ field.label }}
                        </label>

                        <!-- Text Input -->
                        <input
                            v-if="field.type === 'text'"
                            :type="field.type"
                            :name="field.name"
                            :id="field.name"
                            v-model="form[field.name]"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1"
                        >

                        <!-- Textarea -->
                        <textarea
                            v-else-if="field.type === 'textarea'"
                            :name="field.name"
                            :id="field.name"
                            v-model="form[field.name]"
                            rows="3"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1"
                        ></textarea>

                        <!-- Select -->
                        <select
                            v-else-if="field.type === 'select'"
                            :name="field.name"
                            :id="field.name"
                            v-model="form[field.name]"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1"
                        >
                            <option v-for="option in field.options" :key="option.value" :value="option.value">
                                {{ option.text }}
                            </option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-5">
                    <button
                        type="submit"
                        class="px-5 py-2 bg-indigo-600 text-black text-sm font-semibold rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1 transition-colors duration-200"
                    >
                        Salvar Imóvel
                    </button>
                </div>
            </form>

      </div>
    </div>
</template>

<script setup>
import { reactive } from 'vue';
import axios from 'axios';

const fields = [
    { label: "Endereço", name: "endereco", type: "text" },
    { label: "Cidade", name: "cidade", type: "text" },
    { label: "Bairro", name: "bairro", type: "text" },
    { label: "Preço de venda", name: "preco_venda", type: "text" },
    { label: "Preço de aluguel", name: "preco_aluguel", type: "text" },
    { label: "Complemento", name: "complemento", type: "text" },
    { label: "Largura", name: "largura", type: "text" },
    { label: "Descrição", name: "descricao", type: "textarea" },
    { label: "Quartos", name: "quartos", type: "text" },
    { label: "Banheiros", name: "banheiros", type: "text" },
    {
        label: "Mobiliado",
        name: "mobiliado",
        type: "select",
        options: [
            { value: "1", text: "Sim" },
            { value: "0", text: "Não" },
        ],
    },
    { label: "Valor", name: "valor", type: "text" },
];

// Initialize form with all fields set to null or appropriate defaults
const form = reactive(
    fields.reduce((acc, field) => {
        acc[field.name] = field.type === 'select' ? field.options[0].value : null;
        return acc;
    }, {})
);

const submit = async () => {
    try {
        const response = await axios.post('/api/imoveis', form);
        console.log('Success:', response.data);
        // Add success notification or redirect here
    } catch (error) {
        console.error('Error:', error);
        // Add error handling here
    }
};
</script>
