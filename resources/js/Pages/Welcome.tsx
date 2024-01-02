import { PageProps } from '@/types';
import Layout from '@/Layouts/Layout';
import { Head } from '@inertiajs/react';

export default function Welcome({ auth, laravelVersion, phpVersion }: PageProps<{ laravelVersion: string, phpVersion: string }>) {
    return (
        <Layout user={auth.user}>
            <Head title="Home" />
            <h1 className="mb-8 font-bold text-3xl">Welcome</h1>
            <div className="bg-white rounded shadow overflow-hidden max-w-3xl">
                <table className="w-full">
                    <thead>
                        <tr className="bg-gray-100 border-b">
                            <th className="px-4 py-2 w-1/3 text-left">Laravel Version</th>
                            <th className="px-4 py-2 w-1/3 text-left">PHP Version</th>
                            <th className="px-4 py-2 w-1/3 text-left">Database Driver &amp; Version</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr className="odd:bg-gray-50">
                            <td className="px-4 py-2">
                                <a href="https://laravel.com/docs" target="_blank" rel="noopener noreferrer" className="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">Laravel {laravelVersion}</a>
                            </td>
                            <td className="px-4 py-2">PHP {phpVersion}</td>
                            <td className="px-4 py-2">SQLite 3.28.0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </Layout>
    );
}
